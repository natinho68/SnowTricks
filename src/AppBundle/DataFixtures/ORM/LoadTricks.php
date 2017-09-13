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
        $noseGrab->setDescription('This awesome grab will really show off your mastery of the park but is easy to achieve. In the sixth of Ninja Academy’s snowboard skills series, Matt Barlow demonstrates how.

If you have basic grabs down, such as the indy grab (where you grab the toe-side edge between the feet with your back hand) then you’re ready to work your way up the board and try a nose grab. For this trick it’s crucial to focus on bringing the nose of the board to your hand rather than trying to reach down for the board – bending your front leg and straightening your rear leg will bring the tipof the board towards you.

Once you’re comfortable with this move, try reversing it for a tail grab. This time pull the board up by bending your
back leg and straightening your front leg, then grab the tail of the board with your back hand. Be prepared Approach the jump in a relaxed position, slightly on your toe edge with knees and ankles flexed.
Pop up Straighten your knees and ankles and pop off the lip of the jump.
Bend & stretch When in the air, bend your front knee into your body while straightening your back leg.
Grab it Take hold of the tip of the board with your front hand and spot your landing.
Hold on Maintain your position in the air and prepare to land.
Stomp it Release the nose and level the board. Absorb the landing with your knees
and ankles.
Ninja tip Get your board close enough by imagining that you’re trying to knee yourself in the chest.');
        $noseGrab->setCategories($this->getReference('categoryGrabTail'));
        $noseGrab->setAuthor($this->getReference('admin-user'));
        $noseGrab->setSlug('nose-grab');
        // On le persiste
        $manager->persist($noseGrab);
        $this->addReference('nose-grab', $noseGrab);

        $japan = new Trick();
        $japan->setName('japan');
        $japan->setDate(new \DateTime('now'));
        $japan->setDescription('Tricking into how to do a Japan Air Grab on a snowboard is all about getting some air. The Japan Air grab is, like most snowboard tricks,an adaptation of a skateboarding trick. The Japan Air Grab is a popular and traditional boarder’s trick for more experienced snowboarders. The Japan Air Grab is actually difficult, even though the trick itself seems simple. All tricks should be taken seriously. There is great chance for injury to yourself, others or your equipment if performed incorrectly.
What you will need to bust this trick:
Snowboarding gear
Snowboard
Jump or Half Pipe
Learning how to do a Japan Air Grab:
Find a jump spot or half pipe. You will need to gain plenty of air so ensure the jump is big enough or to gain enough air on the half pipe. Approach the jump with proper technique. Knees bent, riding on the edge and keep center. Right before you hit the crest, flatten to the base.
While in the air, grab the snowboard right behind your trailing foot bindings. Pull the board back, bending your knees. Turn your torso away from your hand, so your chest is facing outward. This is the Japan Air Grab.
Before you land let go of the snowboard. Push your knees straight and keep your body straight and upright. As your snowboard touches the powder, allow your knees to bend slightly. Keep your body straight and stick the landing. You have successfully completed the Japan Air Grab!');
        $japan->setCategories($this->getReference('categoryStraight'));
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
