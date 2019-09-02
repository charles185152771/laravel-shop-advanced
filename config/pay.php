<?php

return [
    'alipay' => [
//        'app_id'         => '',
//        'ali_public_key' => '',
//        'private_key'    => '',

        'app_id'         => '2016101000651647',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAiNPX4IuD55w2lhpNW0LQNJlvXpNaLaFwOad8/X+WPeWWQu7eM867hxBz1kJPzTyHQDQeGkSqAM8zdA8KLNzV3d9GN2nSVp4T7V52S2JmnwKDjflnJNip0dTptK4XYF/XePPpAYexYYnxCuIQWSg82yy0Yviz37TlTMoGOqD28jFOb5XrpIaNId91L5/R6rt10y2jOSbCr4A7GSj82VO6Z5Sb1H3uK9AeiFVQliHQpbg3vsgAlPtObp0m86KDo47pdil8MjxBkXY1UFXk4bxVa+Gxk0FDlWO9kbhA14t/imBOrcrTJcH7MWqRuNTF3yjRqENISNIsOiU7bGO9AFZVNwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAuEeH4QIlNCfdwqOTJMmZV8IjxXjY/Qim6imftC/6LpV6YWXe6VwbP/h4ACiVguJZf0VjA4YuhxZdNdKicz1D+XwoQkr5EtlaASwCqNeAD1Bf9Ry7aWCQc0jhGh1sl+F6wOZHSCuuug94CIcn8wIQ6tsIqn/2qH38n07wYf95L/ba1talYYwjJ9pMWOnalA0YFHV+dJDW8xLPaRY8z2M6TkcwP+O5xDd2lN835ujYLB+5W6oTszMPVRsjWZScwZpKxfUbp9DulX9A+CIScO9RcLNUxcnQxwBLvUcRaX2unzvQu5UnDb/YDABXWsWMbnWXy6orzh029sYdhBEU9PTd6wIDAQABAoIBAHS6UrbTrg9IhW8qQCWYUbrGLfSDJSe62EgRj6kKjvX9F2Ukqzu0bUprMFAhZPtgN4KnyB1OXKCTKP3T67UFhM4+uB2t8fHfneSKJTEgOGz6452W0pvgX/+2lWf+ZXAbkq8n7tUnXmlbLRRx0HtcvqyVi/q8TdjS3TdoQFpDAle/eYXFzEMHTJQyPPsN1VE4XCbr9JNvVa9uzezXwZHgPEiblc1o/DjwKplo3oZsWxWIy9lbdVm8xR/33y2DamnkwNMUS5m+F0U8jhK5afwW6o0MvY4ghawovqefO1wQ2qe5r7PtSnz8kJk0R/qY3hokqLlbTi5zaa7A8Esn/MDoLOECgYEA59L6cPIe4qMk+e3wQgwtNxX/154cOJdcN68h31AKurm9vByw3tlbHZfaMq3amVsZuyqSYlnLA7qMnaGiIZJJjxt7on6FTPz/l/3SWwy5f7uCt9QL8kABW5LbpwEOcI5oxcv2bFKWUT++1BBh3PNdc4b7DHjC/dpwM26QaXadArECgYEAy38/oYnRJLJ5CnsjoEUKlmMRv1X1rOnHl5lb7uF0H9euZWYlaGILAHrOUmEdlDVDudBgq/uj7nFc52D+EabFMy2taVykQnQC2XWAXIcNjXRYRIUrZeOpMmgWdOCS3pOIVg41BdDOoZ5TpernjQCkjAFRggcH+GIutk0f+dYjuVsCgYA9T+JmvtKGVGmyJEj33uqSeCILL8j8+qMsIwiNXEkKK5fPybLJrajYgdH2t15qUtrSUqcWlfMIkG0iP552zI7h533icx3kR8F9vGbHJ+1jp/8hiVaDgoQZaRTo7XGZOUDil1gcPBd/c6GPyqlnW4IqzNdW7BV+OCiWobZV/kX2cQKBgQDA9V0h0Ku3D2CE1rS2YSEj7rbCZkD5gAeZMXsh7TgOhZZBYfUwoF7sSoZfSOUiRst8YyF3kroj++xrHeZsWGV/HN3lHUpIFPcquidIFWt9aQfVmSzIhXJHcLlyhAvf76cEap5OcGuuhpGsryx24FgmxY1DLWWaWYcPp9wdK7deJwKBgG1hK5bLWCA3jeMH2SVShBYYMGZFX3kggbCkAJlLeqsuCe0C4IFD5Oq3vORxDBVCz968k1Gr9ACBorDHClw6J3aHXN2AmDtVN7qxzly/kKIz6XBDPjvF6Ag5m45/TztputLesKtcE17SAP23w2P9zrZTWHrrMes4Ui/0C3DTkg/W',

        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
