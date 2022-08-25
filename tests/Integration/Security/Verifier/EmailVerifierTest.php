<?php

namespace App\Tests\Integration\Security\Verifier;

use App\Repository\UserRepository;
use Exception;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * @group integration
 */
class EmailVerifierTest extends KernelTestCase
{
    /**
     * @throws Exception
     */
    public function setUp(): void
    {
        parent::setUp();

        self::bootKernel();

        $userRepository = self::getContainer()->get(UserRepository::class);

        dd($userRepository->findOneBy([]));
    }

    public function testSomething(): void
    {
        $kernel = self::bootKernel();

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }
}
