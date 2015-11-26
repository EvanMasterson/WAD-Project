<?xml version="1.0" encoding="UTF-8"?>
<xsl:transform xmlns:xsl="http://www.w3.org/1999/XSL/Transform"	version="2.0">
    	<xsl:template match="*">
		<xsl:apply-templates/>
	</xsl:template>
	<xsl:template match="text()">
		<xsl:apply-templates/>
	</xsl:template>
	<xsl:template match="/">
		<html>
			<head>
				<title>Colleges in Ireland</title>
			</head>
			<body>
				<h2>College Information</h2>
				<xsl:apply-templates select="//college"/>
			</body>
		</html>
	</xsl:template>

	<xsl:template match="college">
		<xsl:value-of select="."/><br/>
		
	</xsl:template>
</xsl:transform>