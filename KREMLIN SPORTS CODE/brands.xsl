<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>TOP BRANDS</h2>

  <table border="1">
    <tr bgcolor=" lightgreen">
      <th style="text-align:left" >PRODUCT</th>
      <th style="text-align:left">COUNT</th>
         </tr>
    <xsl:for-each select="brands/brand">
    <tr bgcolor="lightblue">
      <td><xsl:value-of select="product"/></td>
      <td><xsl:value-of select="count"/></td>
       
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
