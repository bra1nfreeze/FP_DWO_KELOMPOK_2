<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/deweo?user=root&password=" catalogUri="/WEB-INF/queries/adw1.xml">

select {[Measures].[Line Total],[Measures].[Received Quantity Total]} ON COLUMNS,
  {([Time].[All Times],[ShipMethod].[All Methods],[Vendor].[All Vendors])} ON ROWS
from [PurchaseFact]

</jp:mondrianQuery>

<c:set var="title01" scope="session">Query AdventureWorks Purchasing Fact using Mondrian OLAP</c:set>
