<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="UTF-8"/>

    <xsl:template match="/empleados">
        <html>
            <head>
                <title>Lista de Empleados</title>
            </head>
            <body>
                <h2>Lista de Empleados Ordenada por Salario (Descendente)</h2>
                <ul>
                    <xsl:apply-templates select="empleado">
                        <xsl:sort select="salario" data-type="number" order="descending"/>
                    </xsl:apply-templates>
                </ul>
            </body>
        </html>
    </xsl:template>

    <xsl:template match="empleado">
        <li>
            <xsl:value-of select="nombre"/> - Salario: $<xsl:value-of select="salario"/>
        </li>
    </xsl:template>
</xsl:stylesheet>
