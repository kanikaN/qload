<?php
/**
Base class for all the content thats viewable in the system 
content that can be listened are not subclassed from there
*/
class Model_Content_Viewable extends Model_Content_File {
	
	/**
	Preset for the aspect ration maintained 150 px height image
	*/
    const PRESET_THUMB_X_150 = 'thumb_X_150';
    
	/**
	Preset for the aspect ration maintained 200 px wide image
	*/
	const PRESET_THUMB_200_X = 'thumb_200_X';
	
	/**
	Preset for the aspect ration maintained 800px px wide image
	*/
	const PRESET_LARGE_800_X = 'large_800_X';
}


