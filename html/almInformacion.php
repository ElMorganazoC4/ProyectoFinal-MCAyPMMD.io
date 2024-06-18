<?php require("sidebar.php"); ?>
    <section class="home">
        <div class="title">Almacenamiento de Informacion (Medidas de Almacenamiento)</div>
        <div align = "justify" class="text"> 
        Se refieren a las unidades utilizadas para cuantificar la cantidad de datos que pueden ser almacenados en dispositivos de almacenamiento digital, como discos duros, memorias USB, tarjetas de memoria y servidores de almacenamiento en la nube.
        </div>
        <div align = "Justify" class="text">
            <table class="tablaMAI">
                <tr> <!-- fila 1 Encabezado -->
                    <th align="center"><b>Unidad</b></th>
                    <th align="center"><b>Valor</b></th>
                    <th align="center"><b>Tamaño (en bytes)</b></th>
                </tr>
                <tr> <!-- fila 2 BIT-->
                    <td align="center"><a href="#bit-sec">bit (b)</a></td>
                    <td align="center">0 o 1</td>
                    <td align="center">1/8 de un byte</td>
                </tr>
                <tr> <!-- fila 3  BYTE-->
                    <td align="center"><a href="#byte-sec">Byte (B)</a></td>
                    <td align="center">8 bits</td>
                    <td align="center">1 byte</td>
                </tr>
                <tr> <!-- fila 4 KILOBYTE -->
                    <td align="center"><a href="#kilo-sec">Kilobyte (KB)</a></td>
                    <td align="center">1,024 bytes</td>
                    <td align="center">1,024 bytes</td>
                </tr>
                <tr> <!-- fila 5 MEGABYTE -->
                    <td align="center"><a href="#mega-sec">Megabyte (MB)</a></td>
                    <td align="center">1,024 kilobytes</td>
                    <td align="center">1,048,576 bytes</td>
                </tr>
                <tr> <!-- fila 6 GIGABYTE -->
                    <td align="center"><a href="#giga-sec">Gigabyte(GB)</a></td>
                    <td align="center">1,024 megabytes</td>
                    <td align="center">1,073,741,824 bytes</td>
                </tr>
                <tr> <!-- fila 7 TERABYTE -->
                    <td align="center"><a href="#tera-sec">Terabyte (TB)</a></td>
                    <td align="center">1,024 gigabytes</td>
                    <td align="center">1,099,511,627,776 bytes</td>
                </tr>
                <tr> <!-- fila 8 PETABYTE -->
                    <td align="center"><a href="#peta-sec">Petabyte (PB)</a></td>
                    <td align="center">1,024 terabytes</td>
                    <td align="center">1,125,899,906,842,624 bytes</td>
                </tr>
            </table>
        </div>
        <!-- Parrafo del Bit -->
        <div align = "justify" class="text" id="bit-sec">   
        <ul>
        <li><b>Bit:</b>
            <ul class="ulConSangría">
                <li>La unidad más pequeña de información, puede ser un 0 o un 1.</li>
            </ul>
        </li>
        </ul>  
        </div>
        <!-- Parrafo del Byte -->
        <div align = "justify" class="text" id="byte-sec">   
        <ul>
        <li><b>Byte (B):</b>
            <ul class="ulConSangría">
                <li>Conjunto de 8 bits. Suele representar un solo carácter, como una letra.</li>
            </ul>
        </li>
        </ul>  
        </div>
        <!-- Parrafo del Kilobyte -->
        <div align = "justify" class="text" id="kilo-sec">   
        <ul>
        <li><b>Kilobyte (KB):</b>
            <ul class="ulConSangría">
                <li>1,024 bytes. Equivale a aproximadamente mil caracteres.</li>
            </ul>
        </li>
        </ul>  
        </div>
        <!-- Parrafo del Megabyte -->
        <div align = "justify" class="text" id="mega-sec">   
        <ul>
        <li><b>Megabyte (MB):</b>
            <ul class="ulConSangría">
                <li>1,024 kilobytes. Utilizado para medir el tamaño de archivos comunes como documentos y fotos.</li>
            </ul>
        </li>
        </ul>  
        </div>
        <!-- Parrafo del Gigabyte -->
        <div align = "justify" class="text" id="giga-sec">   
        <ul>
        <li><b>Gigabyte (GB):</b>
            <ul class="ulConSangría">
                <li>1,024 megabytes. Comúnmente usado para medir la capacidad de almacenamiento de discos duros y memorias USB.</li>
            </ul>
        </li>
        </ul>  
        </div>
        <!-- Parrafo del Terabyte -->
        <div align = "justify" class="text" id="tera-sec">   
        <ul>
        <li><b>Terabyte (TB):</b>
            <ul class="ulConSangría">
                <li>1,024 gigabytes. Utilizado para grandes volúmenes de datos, como en servidores y almacenamiento en la nube.</li>
            </ul>
        </li>
        </ul>  
        </div>
        <!-- Parrafo del Petabyte -->
        <div align = "justify" class="text" id="peta-sec">   
        <ul>
        <li><b>Petabyte (PB):</b>
            <ul class="ulConSangría">
                <li>1,024 terabytes. Utilizado para enormes centros de datos y grandes volúmenes de almacenamiento.</li>
            </ul>
        </li>
        </ul>  
        </div>
    </section>
</body>
</html>