# Meu Evento

Meu Evento é um simples gerenciador de eventos.

## Getting Started

### Prerequisites

Apache 2.4
PHP7

### Installing

httpd.conf:

LoadModule rewrite_module modules/mod_rewrite.so

"AllowOverride All" should be present there for .htaccess local rewrite to work
something like that:

 <Directory c:/yourProject/www/>
                AllowOverride All
                Order allow,deny
                Require all granted
                allow from all
 </Directory>﻿



## Running the tests



### Break down into end to end tests


### And coding style tests

## Deployment



## Built With


## Contributing


## Versioning


## Authors


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments
