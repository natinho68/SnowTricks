<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Trick;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadTricks extends AbstractFixture implements OrderedFixtureInterface{

    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $grabTail = new Trick();
        $grabTail->setName('Grab Tail');
        $grabTail->setDate(new \DateTime('now'));
        $grabTail->setDescription('Yes I love tail grabs! It’s a medium difficulty grab as you have to reach a bit more, but so much fun and can be taken off cliffs, used in your spins and tweaked to perfection. Eric Willett, Breck team Riderand Euro X Games winner makes this grab look rad with his frontside spins! Further fun can be had doing seatbelt grabs – bringing your second hand across your body to grab the tail as well. But the basic tail grab is exactly what it sounds like – grabbing the tail of your board with your back hand. Simples! 1. The Set-Up Preferably do this on the same jump you have practised the indys but any jump, cliff or roller you can get some good air off will work. Approach again with good speed. Speed is your friend – it gives you more airtime, and a bonus boost of adrenaline. Note to self: “Adrenaline can be addictive!” Remember, flat board and good centred balance. 2. The Pop So your eyes are looking where you’re going – towards the lip of the jump, edge of the cliff or top of the roller. With your board flat, pop off the tail with your rear leg. 3. Getting the Grab Once you’re in the air initiate the grab by reaching your rear hand back towards the tail of your board and bending your knees slightly. If you are having a hard time reaching that tail try bending your rear leg more than the front to bring the tail of your board closer. Like the indy, it’s best to think about your board coming up to meet your hand rather than your hand going down – this will stop you bending over too far and throwing yourself off balance. 4. Styling It Tail grabs are so fun as you can style them in so many ways. Like the indy, a nose bone is a great tweak to put on a tailgrab. Grabbing your tail, poke that front leg out again and pull up on the tail of your board. More advanced tweaks like the one I do here include pulling it sideways behind you and boning the nose out. 5. The Landing I like holding grabs as long as I can, but at about the three-quarter point you want to start thinking about letting go. With your eyes spotting the landing, release the grab and centre your weight up for a flat base landing. Absorb it with your knees and ideally with both feet landing over your board at the same time. Now go do it and have fun.');
        $grabTail->setCategories($this->getReference('categoryGrabTail'));
        $grabTail->setAuthor($this->getReference('admin-user'));
        $grabTail->setSlug('grab-tail');
        // On le persiste
        $manager->persist($grabTail);
        $this->addReference('grab-tail', $grabTail);

        $noseGrab = new Trick();
        $noseGrab->setName('Nose grab');
        $noseGrab->setDate(new \DateTime('now'));
        $noseGrab->setDescription('This is a Nose grab');
        $noseGrab->setCategories($this->getReference('categorySpin'));
        $noseGrab->setAuthor($this->getReference('admin-user'));
        $noseGrab->setSlug('nose-grab');
        // On le persiste
        $manager->persist($noseGrab);
        $this->addReference('nose-grab', $noseGrab);

        $japan = new Trick();
        $japan->setName('japan');
        $japan->setDate(new \DateTime('now'));
        $japan->setDescription('This is a japan');
        $japan->setCategories($this->getReference('categoryFlips'));
        $japan->setAuthor($this->getReference('admin-user'));
        $japan->setSlug('japan');
        // On le persiste
        $manager->persist($japan);
        $manager->flush();
        $this->addReference('japan', $japan);
        // On déclenche l'enregistrement de tous les tricks


    }

    public function getOrder()
    {
        return 3;
    }
}
