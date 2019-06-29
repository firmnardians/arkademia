
# <!-- Query untuk mencari data sesuai dengan tugas yang di berikan -->

SELECT nama.name AS Name, hobi.name AS Hobby, kategori.name AS Category 
FROM nama LEFT JOIN hobi ON hobi.id = nama.id_hobby LEFT JOIN kategori 
ON kategori.id = nama.id_category

