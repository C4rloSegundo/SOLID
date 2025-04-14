<?php 


namespace AppEtl;

use AppEtl\Arquivo;

class Leitor {
    private $arquivo;
    private $diretorio;


    public function getArquivo(): string {
        return $this->arquivo;
    }
    public function setArquivo(string $arquivo): void {
        $this->arquivo = $arquivo;
    }
    public function getDiretorio(): string {
        return $this->diretorio;
    }
    public function setDiretorio(string $diretorio): void {
        $this->diretorio = $diretorio;
    }

    public function lerArquivo(): array{
        $caminho = $this->getDiretorio() . '/' . $this->getArquivo();
        $extensao = explode('.', $this->getArquivo());

        $classe = '\AppEtl\extrator\\' . ucfirst($extensao[1]);

        return call_user_func_array([
            new $classe,
            'lerArquivo'
        ],
        [
            $caminho
        ]
        );
        
     

    //     $arquivo = new Arquivo();

        

    //     if($extensao[1] == 'csv'){
    //         $arquivo->lerArquivoCSV($caminho);
            
    //     }else if($extensao[1] == 'txt'){
    //         $arquivo->lerArquivoTXT($caminho);
           
    //     }
        

      

    //     return $arquivo->getDados();
    }

}