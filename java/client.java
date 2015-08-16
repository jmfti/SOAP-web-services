public static void main(String[] args) throws RemoteException {
        // TODO Auto-generated method stub
        PersonsServiceIFProxy ps = new PersonsServiceIFProxy();
        for(Person p : ps.getPersonas()){
            System.out.println(p.getName());
        }
    }
 
}