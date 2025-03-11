<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="UTF-8"/>

    <xsl:template match="/ventas">
        <html>
            <head>
                <title>Informe de Ventas</title>
            </head>
            <body>
                <h2>Informe de Ventas por Categoría</h2>
                <table border="1">
                    <tr>
                        <th>Categoría</th>
                        <th>Ventas Totales</th>
                    </tr>
                    <xsl:apply-templates select="categoria">
                        <xsl:sort select="venta" data-type="number" order="descending"/>
                    </xsl:apply-templates>
                </table>
            </body>
        </html>
    </xsl:template>

    <xsl:template match="categoria">
        <tr>
            <td><xsl:value-of select="nombre"/></td>
            <td><xsl:value-of select="venta"/></td>
        </tr>
    </xsl:template>
</xsl:stylesheet>