<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="UTF-8"/>

    <xsl:template match="/ventas">
        <html>
            <head>
                <title>Lista de Ventas</title>
            </head>
            <body>
                <h2>Lista de Categorías Ordenada por Ventas (Descendente)</h2>
                <ul>
                    <xsl:apply-templates select="categoria">
                        <xsl:sort select="venta" data-type="number" order="descending"/>
                    </xsl:apply-templates>
                </ul>
            </body>
        </html>
    </xsl:template>

    <xsl:template match="categoria">
        <li>
            <xsl:value-of select="nombre"/> - Ventas: $<xsl:value-of select="venta"/>
        </li>
    </xsl:template>
</xsl:stylesheet>
