<?php

/**
Digiatal locker for a user 
This implementation is a hybrid approach of file system and storing necessary
meta data in the database

*/
define("UPLOAD_ERR_EMPTY",5);
class Model_Locker extends Model {
    
	/**
	@var Model_User the currently logged in user.
	*/
    protected $_user ;
    /**
    @var string the currently logged in users directory where the users files
    would be stored.
    */
    protected $_user_directory;
    /**
    @var array The list of potential mount points in the system. we do a dynamic
    discovery of available mount points in the system and make the first one 
    detected the active mount point. this allows us to scale the storage
    horizontally.
    eg 
    use case 
    we have two machines - M1 , and M2
    and three SANs  - (media , media_1 , media_2) and assume that "media" is 
    the SAN which exhausted its capacity(disk full) - that there is no more 
    space to write to the drive
    
    And the SAN's are mounted on machines in the following way
    
    M1/DOCROOT/media_2
    M2/DOCROOT/media_1
    M1/DOCROOT/media
    
    the list of mount bases would be 
    array('media_2','media_1','media)
    
    so M1  will check for the presence of mount points in the order and will 
    make media_2 the active mount (FCF)
    
    and M2 will detect media_1 in its file system and make it the active mount.
    
    */
    protected $_mount_base = array("media");
    protected $_active_mount_base = '';
 
	public function __construct($user) {
		$this->_user = $user;
		foreach($this->_mount_base as $mount) {
			if (file_exists(DOCROOT.$mount) ){
				$this->_active_mount_base = $mount;
				break;
			}
		}
		
	}
	
	static $upload_errors = array(
		UPLOAD_ERR_OK => "No errors.", 
		UPLOAD_ERR_INI_SIZE => "Larger than allowed maximum file size (50Mb).",
		UPLOAD_ERR_FORM_SIZE => "Larger than form MAX_FILE_SIZE.",
		UPLOAD_ERR_PARTIAL => "Partial upload.",
		UPLOAD_ERR_NO_FILE => "No file.",
		UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
		UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
		UPLOAD_ERR_EXTENSION => "File upload stopped by extension.",
		UPLOAD_ERR_EMPTY => "File is empty." // add this to avoid an offset
	);
	/**
	Checks the user folder is present , else creates the folder strucutre for
	a user
	*/
    public function get_user_folder() {
    	if ($this->_user_directory != '') {
    		return $this->_user_directory;
    	}
    	$folder_name = '';
    	$name = str_pad("".$this->_user->id,20,"0",STR_PAD_LEFT);
    	$path = $this->_active_mount_base.DIRECTORY_SEPARATOR.chunk_split($name,5,DIRECTORY_SEPARATOR);
    	if (!file_exists($path)) {
    		mkdir($path,0766,true);
    	}
    	$this->_user_directory = $path;
    	
    	return $path;
    }

    /**
    Returns the system file type 
    TODO - some videos gets uploaded to the system as application/octet stream
    have ffmpeg involved to detect the format of those videos
    */
	public function get_file_type($mime_type) {
		$type = 'other';
		if (strpos($mime_type,"audio") !== FALSE){
			$type = "audio";
		} else if (strpos($mime_type,"video") !== FALSE) {
			$type = "video";
		} else if (strpos($mime_type,"image") !== FALSE) {
			$type = "image";
		} 
		
		return $type;
	}
	/**
	Adds text content to th locker - returns with the newly generated content
	takes care of up updating text content if the content id of text content is
	present
	*/
	
	public function add_text_content($request) {
		$content = new Model_Content_Text();
		if (isset($request['text_content_id']) ) {
			$content = ORM::factory('content_text',
				$request['text_content_id']);
			$content->text_content = $request['text_content'];
			$content->save();
		} else {
			$content->set_content($request['text_content']);
		}
		return $content;
	
	}
	
	/**
	Adds a file content OR List of files  to the system 
	returns back with the list of new file content generated 
	in the system 
	*/
	public function add_file_content($files,$request,&$errors) {
		$files = $files['content_file'];
		$contentList = array();
		
		for($pos = 0;$pos <  count($files['name']); $pos++ ) {
			
			
			if ($files['error'][$pos]  == UPLOAD_ERR_NO_FILE ) {
				continue;
			}
			
			if ($files['error'][$pos] > 0 ) {
				$errors['content_file'] = 
				self::$upload_errors[$files['error'][$pos]];
				continue;
			}
			
			
			$source = $files['tmp_name'][$pos];
			$mime = $files['type'][$pos];
			$name = $files['name'][$pos];
			
			$type = $this->get_file_type($mime);
			$path = $this->get_user_folder();
			
			
			$file_md5 = md5_file($source);
			
			$result = explode(".",$name);
			$len = count($result);
			$ext = '';
			
			if ( $len > 0) {
				$ext = $result[$len -1];
			}
		
			$info['type'] = $type;
			$info['mime'] = $mime;
			$info['path'] = "/";
			$info['file_name'] = $name;
			$info['size'] = $files['size'][$pos];
			
			
			
			
			$content = null;
			if ($type == 'video') {
				$content  = new Model_Content_Video();
			} else if ($type == 'audio') {
				$content  = new Model_Content_Audio();
			} else if ($type == 'image') {
				$content  = new Model_Content_Image();
			} else {
				$content = new Model_Content_File();
			}
			$content->set_content($info);
			//echo "moving  - typed etected .$type moving $source to ".$target."\n";
			$target = $path.$this->_user->id."_".$content->id."_o.".$ext;
		
			
			move_uploaded_file($source,DOCROOT.$target);
			$content->file_path = "/".$target;
			$content->save();
			$content->generate_urgent_presets();
			$contentList[] = $content;
			
		}	
		return $contentList;
	
	}
	
	public function remove_content($content_id) {
	
	}
	
	public function list_content($filter) {
	
	}
	
	public function set_permission() {
	
	}
	/**
	Label interfaces are proposal for future
	*/
	public function create_label() {
	}
	
	public function delete_label() {
	}
	
	public function rename_label() {
	}
	
	public function add_content_to_label() {
	}
	
	public function remove_content_from_label() {
	}
}

