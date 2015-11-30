<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
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
				<link rel="stylesheet" href="css/style.css" />
				<h2 id="collegeInfo">College Information</h2>
				<xsl:apply-templates select="//college"/>
			</body>
		</html>
	</xsl:template>

	<xsl:template match="college">
	    
		<ul><li><xsl:value-of select="."/></li></ul><br/>
		
	</xsl:template>
</xsl:stylesheet>