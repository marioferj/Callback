# Callback
Recepción y almacenamiento de la respuesta de hacienda por medio del Callback


## Forma de Uso
En el parametro callbackUrl = 'http://mi-dominio.com/micarpeta/index.php' 

index.php 
```procesara y almacenara la respuesta de hacienda en un archivo JSON.```

consulta.php ```este archivo es complemento para el callback y puede ser usado por sistemas externos al servidor
como una especie de webservice.
Retorna un archivo JSON indicado en el parametro Clave```
