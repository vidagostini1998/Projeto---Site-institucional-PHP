<?
function excluirArquivo($arquivo){
   if( file_exists( $arquivo ) )
      unlink( $arquivo );
      return $arquivo;
} 
?>