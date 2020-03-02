<?php
class Files
{
	private $conteudo = '';

	private function read($path)
	{
		if (!file_exists($path)) {
			throw new \Exception("Arquivo $path não encontrado.");
		}

		$file = fopen($path, 'r');

		while (!feof($file)) {
			$line = fgets($file, 1024);
			$this->conteudo .= "$line\n";
		}

		fclose($file);
	}

	function contentFile($path)
	{
		$this->read($path);
		return $this->conteudo;
	}
}
