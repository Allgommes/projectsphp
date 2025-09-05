Para iniciar a aprendizagem em PHP, é fundamental começar pelos conceitos básicos e gradualmente avançar para tópicos mais complexos. PHP é uma solução de *scripting* do lado do servidor de código aberto, de alto desempenho e multi plataforma, amplamente utilizada para construir aplicações web dinâmicas. A dupla PHP e MySQL é uma das mais importantes no mercado web atual.

Aqui estão os pontos a aprender e os passos iniciais recomendados:

### **1\. Compreender o que é PHP e os seus benefícios**

* **Processamento de Hipertexto (Hypertext Preprocessor)**: PHP é uma ferramenta que possibilita o pré-processamento de páginas HTML, alterando o seu conteúdo antes de o enviar para o navegador. Também permite capturar entradas de dados do utilizador, como formulários e outras formas de interação.  
* **Vantagens de Escolher PHP e MySQL**:  
  * **Nascido para a web**: A integração do PHP com servidores web é simples.  
  * **Curva de aprendizagem suave**: Comparado a outras linguagens, o PHP tem uma curva de aprendizagem mais suave. Programadores com experiência em linguagens estruturadas como C ou Perl aprendem PHP muito rapidamente, e vice-versa.  
  * **Tecnologias livres**: Tanto PHP quanto MySQL são tecnologias de código aberto, o que as torna gratuitas.  
  * **Facilidade e custo de hospedagem**: É fácil encontrar e mais barato hospedar serviços que oferecem PHP e MySQL.  
  * **Velocidade e leveza do MySQL**: MySQL é leve e rápido, mesmo para grandes quantidades de dados.

### **2\. Configurar o ambiente de desenvolvimento**

Antes de escrever qualquer código, precisará de um ambiente onde o PHP possa ser executado e testado.

* **Escolha uma plataforma (WAMP/LAMP/MAMP)**: Estas são combinações de software de código aberto (Apache Web Server, MySQL e PHP) para sistemas operativos específicos (Windows, Linux e Mac, respectivamente). São recomendadas para facilitar a instalação de múltiplos produtos ao mesmo tempo.  
* **Instale o XAMPP ou EasyPHP**:  
  * **XAMPP** é uma ótima opção e é mais popular por ter versões gratuitas para Windows, Linux e OS X, além de incluir vários *add-ons*.  
  * **EasyPHP** é outra opção para o ambiente Windows, que também é um pacote WAMP.  
  * Após o download e instalação, inicie o serviço Apache (e MySQL se for usar bases de dados) através do painel de controle do XAMPP. Poderá ser necessário liberar o Apache no *firewall* do Windows.  
* **Escolha um editor de texto**: Não utilize editores como Word ou Writer. Recomenda-se o **Notepad++** para Windows, ou **Gedit** e **Kate** para Linux.

### **3\. Escrever o primeiro programa PHP**

* **Local de salvamento dos arquivos**: Os arquivos PHP devem ser salvos na pasta **`htdocs`** do XAMPP (ou `/var/www` no Linux, ou `/Applications/XAMPP/htdocs/` no macOS).  
* **Estrutura básica de um *script* PHP**: O código PHP existe dentro de uma etiqueta HTML, começando com **`<?php`** e terminando com **`?>`**. Tudo o que estiver fora destas etiquetas é passado diretamente para o navegador.  
* **Exibir informações**: A instrução **`echo`** (ou `print`) é usada para enviar texto para o navegador.  
* **Fim da instrução**: Em PHP, tal como em C, uma linha de instruções termina com um **ponto e vírgula (`;`)**.

**Exemplo "Hello World"**:  
 \<?php  
    echo "Hello World";  
?\>

*  Salve este código como `myfirstprogram.php` e aceda-o no navegador via `http://localhost/myfirstprogram.php`.  
* **Comentários**: Use `#` para comentários de uma linha, `//` para comentários de uma linha ou `/* ... */` para comentários de várias linhas.  
* **Ajustar o fuso horário**: Se a sua página estiver a mostrar a hora errada, edite o arquivo `php.ini` (localizado, por exemplo, em `/xampp/php/php.ini` ou `/etc/php5/apache2/php.ini` no Debian/Ubuntu) e ajuste a diretiva `date.timezone`. Lembre-se de reiniciar o Apache após a alteração.

### **4\. Fundamentos da linguagem PHP**

Uma vez que o ambiente esteja configurado e você tenha criado o seu primeiro *script*, concentre-se nos seguintes conceitos:

* **Variáveis**:  
  * Sempre começam com um **cifrão (`$`)**.  
  * PHP atribui o tipo de dados automaticamente, não sendo necessário declará-lo explicitamente.  
  * Nomes de variáveis válidos começam com uma letra ou *underline*.  
* **Tipos de Dados**: Familiarize-se com os tipos básicos (inteiros, *floats*, *strings*, booleanos) e, especialmente, **Arrays**.  
* **Operadores e Expressões**: Como manipular dados (aritméticos, lógicos, de atribuição, etc.).  
* **Estruturas de Controlo**:  
  * **Condicionais**: `if`, `else`, `elseif`, `switch`.  
  * **Laços (Loops)**: `while`, `do...while`, `for`, `foreach`.  
* **Funções**:  
  * **Declaração de funções**: Como criar as suas próprias funções para reutilizar código.  
  * **Parâmetros e retorno de valores**: Como passar informações para funções e como elas devolvem resultados.  
  * **Funções incorporadas (built-in)**: Aprenda a usar funções comuns do PHP, como `date()` para datas e horas.  
* **Entrada e Saída (I/O) e Acesso a Disco**:  
  * **Receber entrada do utilizador**: Como o PHP processa dados de formulários HTML usando as **super globais `$_GET` e `$_POST`**.  
  * **Sessões**: Entender como usar as super globais `$_SESSION` para manter dados entre diferentes requisições do navegador (exige `session_start()` no início do *script*).  
  * **Inclusão de código**: Usar `include` e `require` (ou suas variantes `_once`) para organizar o código em múltiplos arquivos e reutilizar componentes.

### **5\. Integração com bases de dados (MySQL)**

* **Fundamentos do MySQL**: MySQL é um sistema de gestão de bases de dados relacional (DBMS) de código aberto, leve e rápido, muito utilizado com PHP.  
* **SQL (Structured Query Language)**: Aprenda o básico de SQL para manipular dados:  
  * `CREATE TABLE` para criar tabelas.  
  * `INSERT INTO` para adicionar dados.  
  * `SELECT` para buscar dados.  
  * `WHERE` e `LIKE` para filtrar resultados.  
  * `UPDATE` para editar registos.  
  * `DELETE` para remover registos.  
* **PHPMyAdmin**: Uma ferramenta de administração de bases de dados gráfica baseada em web, escrita em PHP, incluída no XAMPP para gerenciar bases de dados MySQL.  
* **Conexão PHP com MySQL**: Aprenda a conectar sua aplicação PHP à base de dados. É recomendado usar a biblioteca **MySQLi** (ou PDO), que oferece uma versão melhorada da biblioteca MySQL do PHP e suporta a abordagem orientada a objetos.

### **6\. Programação Orientada a Objetos (OOP)**

Embora possa ser um tópico mais avançado, uma introdução à OOP é valiosa, pois muitos softwares PHP utilizam este paradigma para criar sistemas mais organizados e facilitar a manutenção.

* **Classes e Objetos**: Entenda a diferença entre uma classe (o modelo) e um objeto (uma instância da classe).  
* **Propriedades (Variáveis) e Métodos (Funções)**: Classes contêm variáveis (propriedades) e funções (métodos) que operam sobre elas.  
* **Construtores (`__construct`)**: Métodos especiais que são executados automaticamente quando um novo objeto é criado.  
* **`$this`**: O `$this` é usado dentro de uma classe para se referir ao objeto atual.

### **7\. Melhores Práticas e Recursos Adicionais**

* **Praticar, praticar, praticar**: A programação exige muita prática. Invente problemas para resolver e crie as suas próprias aplicações.  
* **Interpretar erros**: Não ignore as mensagens de erro. Elas geralmente indicam a linha e o tipo de problema, sendo cruciais para a depuração. O PHP 7 também enfatiza blocos `Try/Catch` para lidar com exceções de programa.  
* **Recursos Online**:  
  * **Documentação oficial do PHP**: `http://php.net/docs.php` ou `http://www.php.net/manual/pt_BR/index.php` para a versão em português.  
  * **Melhores práticas PHP**: `http://www.phptherightway.com/`.  
  * **Fóruns e comunidades**: Participe em listas de discussão (como `https://groups.google.com/forum/#!forum/phpemysqlcasadocodigo` ou `https://groups.google.com/forum/#!forum/tdd-no-mundo-real`) e comunidades maiores como GUJ (`http://www.guj.com.br`).  
  * Outros sites úteis incluem `www.htmlite.com`, `larryullman.com/forums`, `www.phpbuilder.com`, e `www.w3schools.com/php/`.  
* **Frameworks**: Para aplicações maiores e mais complexas, eventualmente explore *frameworks* PHP como CodeIgniter, Laravel, CakePHP, Zend Framework, e Symfony.

Ao seguir estes passos e dedicar tempo à prática e à experimentação, desenvolverá rapidamente as competências necessárias em PHP e no ambiente web.

git clone https://github.com/Allgommes/projectsphp.git