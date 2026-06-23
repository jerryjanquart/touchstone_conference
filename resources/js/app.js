import './bootstrap';

import AOS from 'aos';
import 'aos/dist/aos.css';

import Alpine from 'alpinejs';

import.meta.glob([
    '../images/**',
]);

window.Alpine = Alpine;

window.speakerCarousel = function () {
    return {
        active: 0,

        setSpeaker(index) {
            this.active = index;

            document
                .getElementById('featured-speakers')
                .scrollIntoView({ behavior: 'smooth' });
        },

        speakers: [
            
            {
                name: 'Bradley J. Birzer',
                title: 'Author & Professor',
                image: 'assets/images/speakers/birzer.jpg',
                bio: 'is Russell Amos Kirk Chair in American Studies and Professor of History, Hillsdale College. Author of several books, he is currently at work on a biography of sociologist and theorist Robert Nisbet.'
            },

            {
                name: 'J. Budziszewski',
                title: 'Author & Professor',
                image: 'assets/images/speakers/budziszewski.jpg',
                bio: 'is Professor of Government, Philosophy, and Civic Leadership at the University of Texas at Austin, and the author of several books, including <em>Pandemic of Lunacy: How to Think Clearly When Everyone Around You Seems Crazy</em> (Creed & Culture, 2026).'
            },

            {
                name: 'Patrick Deneen',
                title: 'Author & Professor',
                image: 'assets/images/speakers/deneen.jpg',
                bio: 'is Professor of Political Science and holds the David A. Potenziani Memorial College Chair of Constitutional Studies at the University of Notre Dame. His previous books include <em>The Odyssey of Political Theory, Democratic Faith,</em> and <em>Why Liberalism Failed.</em>'
            },
            
            {
                name: 'Rod Dreher',
                title: 'Author',
                image: 'assets/images/speakers/dreher.jpg',
                bio: 'is an American journalist, author, and commentator known for his writings on the intersection of religion, culture, and politics. He is a senior editor at <em>The American Conservative </em>and currently serves as the Director of Network Projects for the Danube Institute in Budapest, Hungary. He is a contributing editor to <em>Touchstone</em>.'
            },

            {
                name: 'Carrie Gress',
                title: 'Author',
                image: 'assets/images/speakers/gress.jpg',
                bio: 'has a doctorate in philosophy from the Catholic University of America and is the editor at the online women’s magazine <em>Theology of Home</em>. Her latest book <em>Something Wicked: Why Feminism Can’t Be Fused with Christianity </em>was just released with Sophia Institute Press.'
            },

            {
                name: 'Adam J. MacLeod',
                title: 'Author & Professor',
                image: 'assets/images/speakers/macleod.jpg',
                bio: 'is Professor of Law and Katherine A. Ryan Chair for Global, Comparative, and International Law at the St. Mary’s University School of Law. MacLeod is the author of four books, dozens of book chapters and scholarly articles, and more than one hundred essays and book reviews.'
            },

            {
                name: 'Carl R. Trueman',
                title: 'Author & Professor',
                image: 'assets/images/speakers/trueman.jpg',
                bio: 'is professor of biblical and religious studies at Grove City College. He is a an esteemed church historian and a fellow at the Ethics and Public Policy Center. Trueman has authored or edited more than a dozen books, including <em>Strange New World; The Rise and Triumph of the Modern Self</em>. He is a contributing editor to <em>Touchstone</em>.'
            },

            {
                name: 'Fr. Theophan Warren',
                title: 'Archpriest',
                image: 'assets/images/speakers/warren.jpg',
                bio: 'is an Orthodox priest serving at St. Seraphim Orthodox Cathedral in Dallas. He earned a Master of Theology degree from St. Tikhon\'s Orthodox Theological Seminary and has served in parish ministry for a number of years. He is a frequent preacher and teacher within the Orthodox tradition.'
            },
            {
                name: 'C. R. Wiley',
                title: 'Pastor & Author',
                image: 'assets/images/speakers/wiley.jpg',
                bio: 'is a senior editor at <em>Touchstone</em>, a co-host of <em>The Theology Pugcast </em>(a podcast with listeners in 60 countries), and  a Presbyterian pastor serving a church in the Pacific Northwest. His most recent book is, <em>In the House of Tom Bombadil </em>(2021).'
            }
        ],
    };
};

Alpine.start();

AOS.init({
    duration: 1500,
    easing: 'ease-out-cubic',
    once: true,
    offset: 60,
});

