# SpecialSanchezTruck

## Especificació del projecte SpecialSanchezTruck

### 1. Introducció

* **Títol del projecte**: SpecialSanchezTruck
* **Objectius**: 
  Desenvolupar una aplicació amb una tenda online de productes i accessoris per a decorar camions i també d'exemples de decorats de camions i una descripció.
* **Descripció**: El projecte que plantege, SpecialSanchezTruck és una tenda online orientada a la venta de productes i accessoris per a camions. També hi haurà una part de notícies amb decorats de exemple.
* **Desenvolupador**: @sanchezasix
* **Adreça web en Github:** https://github.com/2ASIX2018/SpecialSanchezTruck

## SpecialSanchezTruck  Sprint 1: 

### 2. Disseny

L'aplicació farà ús de dos taules per a gestionar els accessoris i productes, altres dos per a gestionar els exemples de decorats, i altra taula per a gestionar els usuaris.

#### 2.1. Descripció de la base de dades

L'esquema de la base de dades és la següent:

![Base de dades](imgread/bd.PNG)

#### 2.2. Descripció de la interfície

Les diferents pàgines què tindra la pagina web.

* **Pàgina inicial**: Mostrara les novetats tant de productes com de decorats de camions.

![Pàgina Principal](imgread/principal.PNG)

* **Pàgina Productes**: Es ah on estaran tots els productes que estiguen a la venta o proximament estiguen.

![Pàgina Productos](imgread/Productes.PNG)

* **Pàgina Decorats**: Estaran tots els decorats publicats.

![Pàgina Decorados](imgread/Decorados.PNG)

* **Pàgina Accés de Usuaris**:

![Pàgina Login](imgread/login.PNG)

## SpecialSanchezTruck  Sprint 2:

* **Control de sessions**
    * **Pagines que s'adapten segons el usuari**

* **Formulari de registre:**
    * **Comprovacions de dades de introducció**
    * **Pagina que rep les dades del formulari de registre**

* **Formulari de login**
    * **Comprovacions de usuaris**

* **Formulari de introducció de productes**
    * **Comprovacions de dades de introducció**
    * **Pagina que rep les dades del formulari de introducció de productes**

* **Tancament de sessions**

### Pagina de inici per a usuaris no registrats.

* **Tindran l'opció de accedir per poder entrar a la pagina de login**

    ![Pàgina Anonimo](imgread/paganonimo.png)

### Pagina de inici login (formulari de login).

* **Per a usuaris no registrats esta disponible la opció "No estas registrado?" per accedir al formulari de registre**

    ![Pàgina EntrarFormReg](imgread/entrarformreg.png)
    
### Pagina de Formulari de registre.

* **Te camps requerits que si no els plenem no ens deixar enviar les dades de registre**

    ![Pàgina FormReg](imgread/formreg.png)

    ![Pàgina FormRegLLeno](imgread/formreglleno.png)

* **Una vegada tots els camps requerits estan plens i pressionem en "Registrarse" se enviaran les dades a una pagina de recollida de dades**

    ![Pàgina RecogidaFormReg](imgread/recformreg.png)
    
### Control de usuaris registrats.

* **Si introduïm un usuari que no esta registrat:**

    ![Pàgina UsuarioError](imgread/usuarioerror.png)

  **Ens apareixerà el següent error amb la opció de pressionar en "Volver a intentar" redireccionara a la pagina de login**

    ![Pàgina ErrorUsuario](imgread/errorusuario.png)

* **Si introduïm un usuari que esta registrat:**

    ![Pàgina UsuarioPrueba](imgread/usuarioprueba.png)

* **Si el usuari es de rol user o lo que es el mateix un usuari registrat normal apareixeran aquestes opcions:**

    ![Pàgina LogUsuPrueba](imgread/loginusuarioprueba.png)

* **Usuari Admin o usuari amb rol admin:**

    ![Pàgina UsuarioAdmin](imgread/usuarioadmin.png)

  **Si el usuari es de rol admin apareixera la opció "Introducir Productos" que es una opcio que soles pot tindre els usuaris admins:**

    ![Pàgina LogUsuAdmin](imgread/menuadmin.png)
    
### Formulari de introducció de productes.

* **Formulari que permet apart de introduir el nom del producte, la descripció, el preu(opcional), permet introduir imatges i que es guarden al servidor, i també segon el que siga si es un producte o un decorat, podem seleccionar la categoria del que introduïm.**

    ![Pàgina FormIntrProd](imgread/formintrodprod.png)

    ![Pàgina FormIntrProdLleno](imgread/formintrodprodlleno.png)

* **Una vegada tots els camps requerits estan plens i pressionem en "Introducir Producto" se enviaran les dades a una pagina de recollida de dades**

    ![Pàgina RecogidaFormIntrProd](imgread/recformintrodprod.png)

* **Comprovació de que es pugen les imatges al servidor**

    ![Imagen subida](imgread/subidafotos.png)

### Tancament de sessions

* **Esta opció apareixerà per a tots els usuaris que estiguen logetgats**

    ![Pàgina Logout](imgread/cerrarsession.png)

* **Una vegada tanquem la sessió ens redirigix a la pagina de inici com a usuari Anonim**

    ![Pàgina SessionAnonimo](imgread/pruebacerrarsession.png)




### Tasques a realitzar i calendari previst

| Tasca | Dates de realització |
|------|-------------|
| Creació de les diferents pagines | del 29/10 al 5/11 |
| Donarli una apareça millor |del 29/10 al 5/11  |
| Anyadir una pagina de registres per a usuari i controlar les sessions |del 5/11 al 18/11  |
| Pulir la base de dades i crearla |del 10/11 al 20/11  |