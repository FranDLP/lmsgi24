<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="UTF-8"/>

    <xsl:template match="/catalogo">
        <html>
            <head>
                <title>Lista de Productos</title>
            </head>
            <body>
                <h2>Lista de Productos Ordenados por Precio (Descendente)</h2>
                <ul>
                    <xsl:apply-templates select="producto">
                        <xsl:sort select="precio" data-type="number" order="descending"/>
                    </xsl:apply-templates>
                </ul>
            </body>
        </html>
    </xsl:template>

    <xsl:template match="producto">
        <li>
            <b><xsl:value-of select="nombre"/></b>: <xsl:value-of select="descripcion"/> - Precio: $<xsl:value-of select="precio"/>
        </li>
    </xsl:template>
</xsl:stylesheet>
