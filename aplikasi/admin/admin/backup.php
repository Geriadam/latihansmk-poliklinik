<?php
session_start();
include "koneksi/koneksi.php";
function backup_tables($tables = '*')
{
	
	//$link = mysql_connect($host,$user,$pass);
	//mysql_select_db($name,$link);
	
	//get all of the tables
	if($tables == '*')
	{
		$tables = array();
		$result = mysql_query('SHOW TABLES');
		while($row = mysql_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	
	//cycle through
	foreach($tables as $table)
	{
		$result = mysql_query('SELECT * FROM '.$table);
		$num_fields = mysql_num_fields($result);
		
		$return.= 'DROP TABLE IF EXISTS '.$table.';';
		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
		$return.= "\n".$row2[1].";\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysql_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = ereg_replace("/\n/","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		//$return.="\n\n\n";
	}
	
        $file="Backup-db-poliklinik(".date('d-m-Y').").sql";
        header("Content-type: text/plain");
        header("Content-Disposition: attachment; filename=$file");
        header("Pragma: no-cache");
        header("Expires: 0");
        print "--Backup SQL DUMP Database\n--Script By Geri (http://www.teknosut.blogspot.com)\n--Copyright (c) 2016\n--File ini di backup pada tanggal ".date('d-m-Y H:i:s')."\n\n";
        print $return;
	exit(0);
}

function restore($filename){

		 
		///////////////////////////////////////////////////////////
	
		// Temporary variable, used to store current query
		$templine = '';
		// Read in entire file
		
		
		//$myFile = $filename;
		//$fh = fopen($myFile, 'r');
		//$theData = fread($fh, filesize($myFile));
		//fclose($fh);
		
		//$return=base64_decode($theData);

		//$nama_db='Dump/db-restore-'.time().'.sql';
		//$handle = fopen($nama_db,'w+');
		//fwrite($handle,$return);
		//fclose($handle);
		$letak="file/temp.sql";
		move_uploaded_file($filename,$letak);
		$lines = file($letak);
		$berhasil=0; $gagal=0;
		// Loop through each line
		foreach ($lines as $line)
		{
			// Skip it if it's a comment
			if (substr($line, 0, 2) == '--' || $line == '')
				continue;
		 
			// Add this line to the current segment
			$templine .= $line;
			// If it has a semicolon at the end, it's the end of the query
			if (substr(trim($line), -1, 1) == ';')
			{
				// Perform the query
				if(mysql_query($templine)){
					$berhasil++;
					echo "<script type=\"text/javascript\">alert('Hasil Restore Berhasil: $berhasil Gagal $gagal');</script>";
					echo "<script language='javascript'>window.location='home.php'</script>";
				}else{
					$gagal++;
					echo "<script type=\"text/javascript\">alert('Hasil Restore Berhasil: $berhasil Gagal $gagal');</script>";
					echo "<script language='javascript'>window.location='home.php'</script>";
				}
				// Reset temp variable to empty
				$templine = '';
				
			}
		}
                if(file_exists($letak)){
                    unlink($letak);
                }
} 

if($_GET["do"]=="backup"){
    backup_tables();
}
if($_GET["do"]=="restore"){
    $file=$_FILES['restore']['tmp_name'];

   restore($file);
}
?>
<button class="btn btn-success" style="font-weight:bold; width: 100%; height: 50px; font-size: 24px" onclick="window.location='backup.php?do=backup'">Backup Database</button><br><br>
<form action="backup.php?do=restore" method="post" enctype='multipart/form-data'>
    <input name="restore" type="file" style="font-weight:bold; width: 70%; height: 50px; font-size: 20px;" required="required">
    <input class="btn btn-primary" type='submit' value="Restore" style="font-weight:bold; width: 100%; height: 50px; font-size: 24px">
</form>