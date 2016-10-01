<?php

if(!function_exists('fileKilobyteSize'))
{
  /**
  * Calculate the file's size into kilobytes
  * @param string $filename The filename of the file
  * @return int
  */
  function fileKilobyteSize($filename)
  {
    if(!file_exists($filename))
    {
      throw new Exception("Filename does not exist");
    }

    return filesize($filename)/1024;
  }
}

if(!function_exists('fileMd5'))
{
  /**
  * Create md5 hash from the file's contents
  *
  * @param string $filename The filename of the file
  * @return string
  *
  */
  function fileMd5($filename)
  {
    $contents=file_get_contents($filename);

    if($contents===FALSE)
    {
      throw new Exception('Cannot read file');
    }

    return md5($contents);
  }
}
