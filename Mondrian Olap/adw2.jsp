<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/deweo?user=root&password=" catalogUri="/WEB-INF/queries/adw2.xml">

select {[Measures].[Sub Total],[Measures].[Unit Price]} ON COLUMNS,
  {([Time].[All Times],[Product].[All Products],[Customer].[All Customers],[Territory].[All Territory])} ON ROWS
from [Sales]


</jp:mondrianQuery>

<c:set var="title01" scope="session">Query AdventureWorks Sales Fact using Mondrian OLAP</c:set>
