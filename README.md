Para instalação basta copiar e colar os arquivos nas pastas especificadas, após o upload rodar os comandos no diretório raiz do Magento:

bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento cache:clean

Após seguir esses passos, você deve ter um campo de texto personalizado no checkout do Magento 2. Os dados inseridos nesse campo serão salvos no banco de dados e poderão ser visualizados no painel de administração. 
