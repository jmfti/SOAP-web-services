public class server {
 
    public static void main(String[] args) {
        String url = "http://localhost:9013/PersonsServiceImplementation";
        PersonsService ps = new PersonsService();
        Endpoint.publish(url, ps);
    }
}