class Form {
    constructor($name, $age, $gender, $email, $phone, $other) {
        this.$name = $name;
        this.$age = $age;
        this.$gender = $gender;
        this.$email = $email;
        this.$phone = $phone;
        this.$other = $other;
    }

}

class Display {
    validate(form) {
        if (form.$name.length < 10 || form.$age.length < 3 || form.$gender.length < 8 || form.$email.length < 20 || form.$phone.length < 10 || form.$other.length < 256) {
            return false;
        }
        else {
            return true;
        }
    }
}


    let form = new Form('Hansika', 45, 'female', 'koli.sonia@yahoo.com', 8734265432, 'hsdgsdsh');
console.log(form);


let display = new Display();
if (display.validate(form)) {
    return true;

}
else {
    return false;
}