public class Person {
 
    private List<Person> personas;
    String name;
 
    public Person(String name){
        this.name = name;
    }
 
    public List<Person> getPersonas() {
        return personas;
    }
 
    public void setPersonas(List<Person> personas){
        this.personas = personas;
    }
 
    public String getName() {
        return name;
    }
 
    public void setName(String name) {
        this.name = name;
    }
 
}