<?php
// model/Buku.php
class Buku {
    private $dataBuku = [
        // Daftar 100 Buku Paling Terkenal di Dunia (Diurutkan berdasarkan Judul/Abjad)
        // Format: ["id" => N, "judul" => "JUDUL", "pengarang" => "PENGARANG", "tahun_terbit" => TAHUN]

        // A (1-8)
        ["id" => 1, "judul" => "A Brief History of Time", "pengarang" => "Stephen Hawking", "tahun_terbit" => 1988],
        ["id" => 2, "judul" => "A Confederacy of Dunces", "pengarang" => "John Kennedy Toole", "tahun_terbit" => 1980],
        ["id" => 3, "judul" => "A Passage to India", "pengarang" => "E. M. Forster", "tahun_terbit" => 1924],
        ["id" => 4, "judul" => "A Tale of Two Cities", "pengarang" => "Charles Dickens", "tahun_terbit" => 1859],
        ["id" => 5, "judul" => "Alice's Adventures in Wonderland", "pengarang" => "Lewis Carroll", "tahun_terbit" => 1865],
        ["id" => 6, "judul" => "Animal Farm", "pengarang" => "George Orwell", "tahun_terbit" => 1945],
        ["id" => 7, "judul" => "Anna Karenina", "pengarang" => "Leo Tolstoy", "tahun_terbit" => 1877],
        ["id" => 8, "judul" => "Art of War, The", "pengarang" => "Sun Tzu", "tahun_terbit" => -500], // Abad ke-5 SM

        // B (9-13)
        ["id" => 9, "judul" => "Blind Assassin, The", "pengarang" => "Margaret Atwood", "tahun_terbit" => 2000],
        ["id" => 10, "judul" => "Book Thief, The", "pengarang" => "Markus Zusak", "tahun_terbit" => 2005],
        ["id" => 11, "judul" => "Brave New World", "pengarang" => "Aldous Huxley", "tahun_terbit" => 1932],
        ["id" => 12, "judul" => "Brothers Karamazov, The", "pengarang" => "Fyodor Dostoevsky", "tahun_terbit" => 1880],
        ["id" => 13, "judul" => "Butcher Boy, The", "pengarang" => "Patrick McCabe", "tahun_terbit" => 1992],

        // C (14-17)
        ["id" => 14, "judul" => "Catch-22", "pengarang" => "Joseph Heller", "tahun_terbit" => 1961],
        ["id" => 15, "judul" => "Catcher in the Rye, The", "pengarang" => "J.D. Salinger", "tahun_terbit" => 1951],
        ["id" => 16, "judul" => "Chronicles of Narnia, The", "pengarang" => "C.S. Lewis", "tahun_terbit" => 1950],
        ["id" => 17, "judul" => "Color Purple, The", "pengarang" => "Alice Walker", "tahun_terbit" => 1982],

        // D (18-21)
        ["id" => 18, "judul" => "Da Vinci Code, The", "pengarang" => "Dan Brown", "tahun_terbit" => 2003],
        ["id" => 19, "judul" => "Divine Comedy, The", "pengarang" => "Dante Alighieri", "tahun_terbit" => 1320],
        ["id" => 20, "judul" => "Don Quixote", "pengarang" => "Miguel de Cervantes", "tahun_terbit" => 1605],
        ["id" => 21, "judul" => "Dracula", "pengarang" => "Bram Stoker", "tahun_terbit" => 1897],

        // E (22-23)
        ["id" => 22, "judul" => "East of Eden", "pengarang" => "John Steinbeck", "tahun_terbit" => 1952],
        ["id" => 23, "judul" => "Eighty Days, The", "pengarang" => "Jules Verne", "tahun_terbit" => 1873],

        // F (24-26)
        ["id" => 24, "judul" => "Fahrenheit 451", "pengarang" => "Ray Bradbury", "tahun_terbit" => 1953],
        ["id" => 25, "judul" => "Foundation", "pengarang" => "Isaac Asimov", "tahun_terbit" => 1951],
        ["id" => 26, "judul" => "Frankenstein", "pengarang" => "Mary Shelley", "tahun_terbit" => 1818],

        // G (27-31)
        ["id" => 27, "judul" => "Gone with the Wind", "pengarang" => "Margaret Mitchell", "tahun_terbit" => 1936],
        ["id" => 28, "judul" => "Grapes of Wrath, The", "pengarang" => "John Steinbeck", "tahun_terbit" => 1939],
        ["id" => 29, "judul" => "Great Expectations", "pengarang" => "Charles Dickens", "tahun_terbit" => 1861],
        ["id" => 30, "judul" => "Great Gatsby, The", "pengarang" => "F. Scott Fitzgerald", "tahun_terbit" => 1925],
        ["id" => 31, "judul" => "Gulliver's Travels", "pengarang" => "Jonathan Swift", "tahun_terbit" => 1726],

        // H (32-37)
        ["id" => 32, "judul" => "Handmaid's Tale, The", "pengarang" => "Margaret Atwood", "tahun_terbit" => 1985],
        ["id" => 33, "judul" => "Harry Potter and the Sorcerer's Stone", "pengarang" => "J.K. Rowling", "tahun_terbit" => 1997],
        ["id" => 34, "judul" => "Heart of Darkness", "pengarang" => "Joseph Conrad", "tahun_terbit" => 1899],
        ["id" => 35, "judul" => "His Dark Materials", "pengarang" => "Philip Pullman", "tahun_terbit" => 1995],
        ["id" => 36, "judul" => "Hobbit, The", "pengarang" => "J.R.R. Tolkien", "tahun_terbit" => 1937],
        ["id" => 37, "judul" => "Hunchback of Notre-Dame, The", "pengarang" => "Victor Hugo", "tahun_terbit" => 1831],

        // I (38-40)
        ["id" => 38, "judul" => "Iliad, The", "pengarang" => "Homer", "tahun_terbit" => -800], // Abad ke-8 SM
        ["id" => 39, "judul" => "In Search of Lost Time", "pengarang" => "Marcel Proust", "tahun_terbit" => 1913],
        ["id" => 40, "judul" => "Invisible Man", "pengarang" => "Ralph Ellison", "tahun_terbit" => 1952],

        // J (41-43)
        ["id" => 41, "judul" => "Jane Eyre", "pengarang" => "Charlotte Brontë", "tahun_terbit" => 1847],
        ["id" => 42, "judul" => "Jungle Book, The", "pengarang" => "Rudyard Kipling", "tahun_terbit" => 1894],
        ["id" => 43, "judul" => "Jurassic Park", "pengarang" => "Michael Crichton", "tahun_terbit" => 1990],

        // K (44)
        ["id" => 44, "judul" => "Kafka on the Shore", "pengarang" => "Haruki Murakami", "tahun_terbit" => 2002],

        // L (45-48)
        ["id" => 45, "judul" => "Les Misérables", "pengarang" => "Victor Hugo", "tahun_terbit" => 1862],
        ["id" => 46, "judul" => "Life of Pi", "pengarang" => "Yann Martel", "tahun_terbit" => 2001],
        ["id" => 47, "judul" => "Lord of the Flies", "pengarang" => "William Golding", "tahun_terbit" => 1954],
        ["id" => 48, "judul" => "Lord of the Rings, The", "pengarang" => "J.R.R. Tolkien", "tahun_terbit" => 1954],

        // M (49-54)
        ["id" => 49, "judul" => "Madame Bovary", "pengarang" => "Gustave Flaubert", "tahun_terbit" => 1856],
        ["id" => 50, "judul" => "Magic Mountain, The", "pengarang" => "Thomas Mann", "tahun_terbit" => 1924],
        ["id" => 51, "judul" => "Middlemarch", "pengarang" => "George Eliot", "tahun_terbit" => 1874],
        ["id" => 52, "judul" => "Mistborn: The Final Empire", "pengarang" => "Brandon Sanderson", "tahun_terbit" => 2006],
        ["id" => 53, "judul" => "Moby Dick", "pengarang" => "Herman Melville", "tahun_terbit" => 1851],
        ["id" => 54, "judul" => "Murder on the Orient Express", "pengarang" => "Agatha Christie", "tahun_terbit" => 1934],

        // N (55-57)
        ["id" => 55, "judul" => "Native Son", "pengarang" => "Richard Wright", "tahun_terbit" => 1940],
        ["id" => 56, "judul" => "Never Let Me Go", "pengarang" => "Kazuo Ishiguro", "tahun_terbit" => 2005],
        ["id" => 57, "judul" => "Nibelungenlied, The", "pengarang" => "Anonim", "tahun_terbit" => 1200],

        // O (58-64)
        ["id" => 58, "judul" => "Odyssey, The", "pengarang" => "Homer", "tahun_terbit" => -800], // Abad ke-8 SM
        ["id" => 59, "judul" => "Old Man and the Sea, The", "pengarang" => "Ernest Hemingway", "tahun_terbit" => 1952],
        ["id" => 60, "judul" => "One Hundred Years of Solitude", "pengarang" => "Gabriel García Márquez", "tahun_terbit" => 1967],
        ["id" => 61, "judul" => "One Flew Over the Cuckoo's Nest", "pengarang" => "Ken Kesey", "tahun_terbit" => 1962],
        ["id" => 62, "judul" => "Origin of Species, The", "pengarang" => "Charles Darwin", "tahun_terbit" => 1859],
        ["id" => 63, "judul" => "Orlando", "pengarang" => "Virginia Woolf", "tahun_terbit" => 1928],
        ["id" => 64, "judul" => "Othello", "pengarang" => "William Shakespeare", "tahun_terbit" => 1603],

        // P (65-68)
        ["id" => 65, "judul" => "Picture of Dorian Gray, The", "pengarang" => "Oscar Wilde", "tahun_terbit" => 1891],
        ["id" => 66, "judul" => "Pride and Prejudice", "pengarang" => "Jane Austen", "tahun_terbit" => 1813],
        ["id" => 67, "judul" => "Process, The", "pengarang" => "Franz Kafka", "tahun_terbit" => 1925],
        ["id" => 68, "judul" => "Pillars of the Earth, The", "pengarang" => "Ken Follett", "tahun_terbit" => 1989],

        // Q (69)
        ["id" => 69, "judul" => "Quo Vadis", "pengarang" => "Henryk Sienkiewicz", "tahun_terbit" => 1896],

        // R (70-74)
        ["id" => 70, "judul" => "Rebecca", "pengarang" => "Daphne du Maurier", "tahun_terbit" => 1938],
        ["id" => 71, "judul" => "Remains of the Day, The", "pengarang" => "Kazuo Ishiguro", "tahun_terbit" => 1989],
        ["id" => 72, "judul" => "Road, The", "pengarang" => "Cormac McCarthy", "tahun_terbit" => 2006],
        ["id" => 73, "judul" => "Romeo and Juliet", "pengarang" => "William Shakespeare", "tahun_terbit" => 1597],
        ["id" => 74, "judul" => "Rubaiyat of Omar Khayyam", "pengarang" => "Omar Khayyam", "tahun_terbit" => 1120],

        // S (75-81)
        ["id" => 75, "judul" => "Secret History, The", "pengarang" => "Donna Tartt", "tahun_terbit" => 1992],
        ["id" => 76, "judul" => "Sense and Sensibility", "pengarang" => "Jane Austen", "tahun_terbit" => 1811],
        ["id" => 77, "judul" => "Shining, The", "pengarang" => "Stephen King", "tahun_terbit" => 1977],
        ["id" => 78, "judul" => "Slaughterhouse-Five", "pengarang" => "Kurt Vonnegut", "tahun_terbit" => 1969],
        ["id" => 79, "judul" => "Song of Solomon", "pengarang" => "Toni Morrison", "tahun_terbit" => 1977],
        ["id" => 80, "judul" => "Sound and the Fury, The", "pengarang" => "William Faulkner", "tahun_terbit" => 1929],
        ["id" => 81, "judul" => "Stranger, The", "pengarang" => "Albert Camus", "tahun_terbit" => 1942],

        // T (82-93)
        ["id" => 82, "judul" => "Things Fall Apart", "pengarang" => "Chinua Achebe", "tahun_terbit" => 1958],
        ["id" => 83, "judul" => "Three Musketeers, The", "pengarang" => "Alexandre Dumas", "tahun_terbit" => 1844],
        ["id" => 84, "judul" => "Time Traveler's Wife, The", "pengarang" => "Audrey Niffenegger", "tahun_terbit" => 2003],
        ["id" => 85, "judul" => "Tinker Tailor Soldier Spy", "pengarang" => "John le Carré", "tahun_terbit" => 1974],
        ["id" => 86, "judul" => "To Kill a Mockingbird", "pengarang" => "Harper Lee", "tahun_terbit" => 1960],
        ["id" => 87, "judul" => "Treasure Island", "pengarang" => "Robert Louis Stevenson", "tahun_terbit" => 1883],
        ["id" => 88, "judul" => "Trial, The", "pengarang" => "Franz Kafka", "tahun_terbit" => 1925],
        ["id" => 89, "judul" => "Twenty Thousand Leagues Under the Sea", "pengarang" => "Jules Verne", "tahun_terbit" => 1870],
        ["id" => 90, "judul" => "Twilight", "pengarang" => "Stephenie Meyer", "tahun_terbit" => 2005],
        ["id" => 91, "judul" => "Tuesdays with Morrie", "pengarang" => "Mitch Albom", "tahun_terbit" => 1997],
        ["id" => 92, "judul" => "Two Towers, The", "pengarang" => "J.R.R. Tolkien", "tahun_terbit" => 1954],
        ["id" => 93, "judul" => "Taming of the Shrew, The", "pengarang" => "William Shakespeare", "tahun_terbit" => 1592],

        // U (94)
        ["id" => 94, "judul" => "Ulysses", "pengarang" => "James Joyce", "tahun_terbit" => 1922],

        // W (95-98)
        ["id" => 95, "judul" => "Watchmen", "pengarang" => "Alan Moore & Dave Gibbons", "tahun_terbit" => 1986],
        ["id" => 96, "judul" => "War and Peace", "pengarang" => "Leo Tolstoy", "tahun_terbit" => 1869],
        ["id" => 97, "judul" => "Where the Sidewalk Ends", "pengarang" => "Shel Silverstein", "tahun_terbit" => 1974],
        ["id" => 98, "judul" => "Wuthering Heights", "pengarang" => "Emily Brontë", "tahun_terbit" => 1847],

        // Y (99)
        ["id" => 99, "judul" => "Year of the Flood, The", "pengarang" => "Margaret Atwood", "tahun_terbit" => 2009],

        // 1984 (100)
        ["id" => 100, "judul" => "1984", "pengarang" => "George Orwell", "tahun_terbit" => 1949],
    ];

    // Mengambil semua data buku
    public function getAllBuku() {
        return $this->dataBuku;
    }
}
?>