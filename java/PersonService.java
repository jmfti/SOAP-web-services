@WebService
public interface PersonsServiceIF {
 
    public List<Person> getPersonas();
}
 
@WebService(endpointInterface="com.pruebaws.PersonsServiceIF", serviceName="PersonsServiceImplementation")
public class PersonsService implements PersonsServiceIF{
 
    @Override
 
    public List<Person> getPersonas() {
        // TODO Auto-generated method stub
        Person p = new Person("manuel");
        ArrayList<Person> personas = new ArrayList<Person>();
        personas.add(new Person("jose"));
        personas.add(new Person("juan"));
 
        p.setPersonas(personas);
 
        return personas;
    }
 
}