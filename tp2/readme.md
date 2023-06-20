# TP 2: Prise en main de docker

II - Récupérer une image httpd

On doit récupérer l'image httpd avec la version: `alpine3.17`.

On peut donc utiliser la commande

```bash
docker pull httpd:alpine3.17
```

III - Créer un volume

Pour créer un volume, on peut utiliser la commande

```bash
docker volume create volume_serveur_web
```

Pour connaître le path du volume sur notre machine, on peut utiliser la commande:

```bash
docker inspect volume_serveur_web
[
    {
        "CreatedAt": "2023-04-19T10:44:16+02:00",
        "Driver": "local",
        "Labels": null,
        "Mountpoint": "/var/lib/docker/volumes/volume_serveur_web/_data",
        "Name": "volume_serveur_web",
        "Options": null,
        "Scope": "local"
    }
]
```

On peut donc ajouter le fichier HTML dans le volume dans le dossier `/var/lib/docker/volumes/volume_serveur_web/_data`.



IV - Démarrer un conteneur

conteneur détaché nommé tp21:

```bash
docker run --detach --name tp21 httpd:alpine3.17
```

conteneur détaché nommé tp22 avec le volume

```bash
docker run --detach --volume volume_serveur_web:/usr/local/apache2/htdocs/ --name tp22 httpd:alpine3.17
```

conteneur détaché nommé tp23 avec le volume et le port 80 exposé sur la machine
```bash
docker run --detach --volume volume_serveur_web:/usr/local/apache2/htdocs/ --name tp23 -p 80:80 httpd:alpine3.17
```
