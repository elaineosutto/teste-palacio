Para instalação basta copiar e colar os arquivos nas pastas especificadas, após o upload rodar os comandos no diretório raiz do Magento:
<br><br>
bin/magento setup:upgrade<br>
bin/magento setup:di:compile<br>
bin/magento cache:clean<br>
<br><br>
Após seguir esses passos, você deve ter um campo de texto personalizado no checkout do Magento 2. Os dados inseridos nesse campo serão salvos no banco de dados e poderão ser visualizados no painel de administração. 
