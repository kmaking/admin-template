<?php

if (!function_exists("set_option")) {
    function set_option(array $options, $selected = "") : array
    {
    	// Check for Multiple choice
    	if(is_array($selected)) {
    		foreach ($selected as $key) { 
    			$value = $options[$key];
    			$options[$key] = [ 'value' => $value, 'attribute' => 'selected' ]; 
    		}
    	}

    	// Check for Single Choice
    	if ($selected!=="") {
    		$value = $options[$selected];
    		$options[$selected] = [ 'value' => $value, 'attribute' => 'selected' ]; 
    	}
    	
    	return $options;
    }
}

if (!function_exists("set_attribute")) {
    function set_attribute(array $attribute) : string
    {
        $html = '';
        foreach ($attribute ?? [] as $key => $value) {
            if(is_string($value))
                $html .= sprintf(" %s=\"%s\"", $key, $value);
            elseif (is_bool($value) && $value)
                $html .= sprintf(" %s", $key);
        }
        return $html;
    }
}

if (!function_exists("script")) {
    function script(string $path, bool $is_absolute = false) : string
    {
        $url = !$is_absolute? asset($path): $path;
        return '<script type="text/javascript" src="'.$url.'"></script>';
    }
}

if (!function_exists("style")) {
    function style(string $path, bool $is_absolute = false) : string
    {
        $url = !$is_absolute? asset($path): $path;
        return '<link rel="stylesheet" type="text/css" href="'.$url.'">';
    }
}