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
				<title>RSS Feed</title>
			</head>
			<body>
				<link rel="stylesheet" href="css/style.css" />
				<h2 id="rss">RSS Feed</h2>
				<xsl:apply-templates select="//item[last()]"/>
			</body>
		</html>
	</xsl:template>

	<xsl:template match="item">
	    
		<ul><li><xsl:value-of select="."/></li></ul><br/>
		
	</xsl:template>
</xsl:stylesheet>