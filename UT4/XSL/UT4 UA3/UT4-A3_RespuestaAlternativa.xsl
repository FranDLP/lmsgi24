<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes"/>
    <xsl:template match="/catalogo">
        <html lang="es">
            <head>
                <meta charset="UTF-8"/>
                <title>Catálogo de Productos</title>
                <style>
                    h1 { color: #3a3a3a; font-family: Verdana, sans-serif; } 
                    p { color: #3a3a3a; font-family: Arial, sans-serif; } 
                </style>
            </head>
            <body>
                <h1>Catálogo de Productos</h1>
                <ul>
                    <xsl:for-each select="producto">
                        <li>
                            <p>
                                <strong>Nombre: </strong>
                                <xsl:value-of select="nombre"/><br/>
                                <strong>Descripción: </strong>
                                <xsl:value-of select="descripcion"/><br/>
                                <strong>Precio: </strong>$
                                <xsl:value-of select="precio"/>
                            </p>
                        </li>
                    </xsl:for-each>
                </ul>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
