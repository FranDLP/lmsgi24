<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes"/>
    <xsl:template match="/ventas">
        <html lang="es">
            <head>
                <meta charset="UTF-8"/>
                <title>Informe de Ventas</title>
                <style>
                    h1 { color: #3a3a3a; font-family: Verdana, sans-serif; } 
                    p { color: #3a3a3a; font-family: Arial, sans-serif; } 
                </style>
            </head>
            <body>
                <h1>Informe de Ventas por Categoría</h1>
                <ul>
                    <xsl:for-each select="//categoria">
                        <xsl:sort select="venta" data-type="number" order="descending"/>
                        <li>
                            <p>
                                <strong>Nombre: </strong>
                                <xsl:value-of select="nombre"/>

                                <strong>Venta: </strong>
                                <xsl:value-of select="venta"/>
                            </p>
                        </li>
                    </xsl:for-each>
                </ul>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
