<!DOCTYPE html>
<html>
<head>
  <title>Convertidor de Unidades</title>
</head>
<body>
  <h1>Convertidor de Unidades</h1>
  <form action="convertir" method="POST">
    @csrf
    <label>Valor:</label>
    <input type="number" name="valor" required>
    <br>
    <label>De:</label>
    <select name="de" required>
      <option value="MB">MB</option>
      <option value="GB">GB</option>
      <option value="TB">TB</option>
    </select>
    <br>
    <label>A:</label>
    <select name="a" required>
      <option value="MB">MB</option>
      <option value="GB">GB</option>
      <option value="TB">TB</option>
    </select>
    <br>
    <button type="submit">Convertir</button>
  </form>
 
</body>
</html>
   
