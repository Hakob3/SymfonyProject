<?php
//
//namespace App\EventSubscriber;
//
//
//use Symfony\Component\EventDispatcher\EventSubscriberInterface;
//use Symfony\Component\HttpKernel\Event\RequestEvent;
//use Symfony\Component\HttpKernel\KernelEvents;
//
//class LocaleSubscriber implements EventSubscriberInterface
//{
//    /**
//     * @var string
//     */
//    private string $defaultLocale;
//
//    public function __construct(string $defaultLocale)
//    {
//
//        $this->defaultLocale = $defaultLocale;
//    }
//
//    public function onKernelRequest(RequestEvent $event)
//    {
//        $request = $event->getRequest();
//        if (!$request->hasPreviousSession()){
//            return;
//        }
//
//        $locale = $request->attributes->get('_locale');
//        if($locale){
//            $request->getSession()->set('locale', $locale);
//        } else {
//            $request->setLocale(
//                $request->getSession()->get('_locale', $this->defaultLocale)
//            );
//        }
//    }
//
//    public static function getSubscribedEvents()
//    {
//        return [
//            KernelEvents::REQUEST => [
//                'onKernelRequest', 20
//            ]
//        ];
//    }
//}
