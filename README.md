# upload-videos
Projeto NIDO


Colaboradores: Elvis/Rafael

- Iniciando o projeto
  - Suba o conainer do Plex com o comando abaixo:
  
  docker run -d -p 32400:32400/tcp -p 3005:3005/tcp -p 8324:8324/tcp -p 32469:32469/tcp -p 1900:1900/udp -p 32410:32410/udp -p 32412:32412/udp -p 32413:32413/udp -p 32414:32414/udp -e TZ="America/Fortaleza" -e PLEX_CLAIM="claim-4hToTrxpRA8Cxsswmdq6" -e ADVERTISE_IP="http://192.168.14.22:32400/" -h PlexNido -v /home/rafael/plex/database:/config -v /home/rafael/plex/transcode/temp:/transcode -v /home/rafael/plex/media:/data
  
  - Suba o conainer da aplicaço de up-load com o comando abaixo:
  
  docker run -d -p 32400:32400/tcp -h PlexNido upload-video:4.0

docker run -d -p 32400:32400 -h PlexNido upload-video:2.0
A imagem da aplicação foi incluída no dockerhub com sucesso.
Utilizando a imagem rafaelsilva1996/projetonido publicada no dockerhub.
