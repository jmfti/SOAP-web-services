from suds.client import Client
 
cli = Client("http://localhost/nusoaptest.php?wsdl")
print cli
 
cli.service.fillOrder(1, "asdasd", "98dha")