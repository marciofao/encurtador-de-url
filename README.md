# Encurtador de URL 🔗
Esboço de Sistema feito Utilizando Wordpress e Docker.

Este repositório contem um plugin que registra um template de página para funcionar como página do encurtador.
Links encurtados são gerados e podem ser administrados pela tela admin do wordpress.

## Recursos existentes
- Página que gera URL encurtada
- Menu admin com listagem

 ## Necessita implementar
 - funcionamento do link encurtado
 - contagem de visitas

## Requisitos 📝
Para rodar é necessário **Docker** instalado na máquina

## Subir sistema
``` docker-compose up```

depois disso estará disponível os comandos 
``` docker-compose start```
e
``` docker-compose stop ```

Apos a instancia estar rodando, os plugins ***ACF*** e ***CPT-UI*** necessitam estar ativos na instancia wordpress.


### Materiais úteis 
Utiliza a estrutura docker-compose deste repositório:
- https://github.com/nezhar/wordpress-docker-compose
