<?php
class ProviderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProvider()
    {


        //test case to return all transactaions from all providers
        $response = $this->call('GET', 'api/v1/transactaions');
        $this->assertEquals(200, $response->status());
        $this->json('GET', 'api/v1/transactaions', ['Accept' => 'application/json'])
            ->seeJsonEquals([
                "success"=> true,
                "message"=>"",
                "data"=>
                    [
                            [
                                "amount"=>500.00,
                                "currency"=>"EGP",
                                "phone"=>"00201134567890",
                                "status"=>"done",
                                "created_at"=>"2021-03-29 09:36:11",
                                "id"=>"12345678"
                            ],
                            [
                                "amount"=>300.00,
                                "currency"=>"USD",
                                "phone"=>"00201099389806",
                                "status"=>"wait",
                                "created_at"=>"2021-03-29 09:36:11",
                                "id"=>"12345679"
                            ],
                            [
                                "amount"=>500.00,
                                "currency"=>"EUR",
                                "phone"=>"00201134567890",
                                "status"=>"nope",
                                "created_at"=>"2021-03-29 09:36:11",
                                "id"=>"12345680"
                            ],
                            [
                                "amount"=>500.00,
                                "currency"=>"EGP",
                                "phone"=>"00201099389806",
                                "status"=>"nope",
                                "created_at"=>"2021-03-29 09:36:11",
                                "id"=>"12345681"
                            ],
                            [
                                "amount"=>400.00,
                                "currency"=>"EGP",
                                "phone"=>"00201134567890",
                                "status"=>"done",
                                "created_at"=>"2021-04-1 09:36:11",
                                "id"=>"12345682"
                            ],
                            [
                                "amount"=>900.00,
                                "currency"=>"USD",
                                "phone"=>"00201134567890",
                                "status"=>"done",
                                "created_at"=>"2021-04-7 09:36:11",
                                "id"=>"12345683"
                            ],
                            [
                                "amount"=>70.00,
                                "currency"=>"EGP",
                                "phone"=>"00201134567890",
                                "status"=>"done",
                                "created_at"=>"2021-05-2 09:36:11",
                                "id"=>"12345684"
                            ],
                            [
                                "transactionAmount"=>"200",
                                "Currency"=>"USD",
                                "senderPhone"=>"00201234567890",
                                "transactionStatus"=>1,
                                "transactionDate"=>"2021-03-29 09:36:11",
                                "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a613"
                            ],
                            [
                                "transactionAmount"=>100,
                                "Currency"=>"USD",
                                "senderPhone"=>"00201234567890",
                                "transactionStatus"=>3,
                                "transactionDate"=>"2021-04-7 09:36:11",
                                "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a605"
                            ],
                            [
                                "transactionAmount"=>400,
                                "Currency"=>"EUR",
                                "senderPhone"=>"00201234567890",
                                "transactionStatus"=>3,
                                "transactionDate"=>"2021-04-20 09:36:11",
                                "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a678"
                            ],
                            [
                                "transactionAmount"=>20000,
                                "Currency"=>"EGP",
                                "senderPhone"=>"00201234567890",
                                "transactionStatus"=>2,
                                "transactionDate"=>"2021-04-25 09:36:11",
                                "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a699"
                            ],
                            [
                                "transactionAmount"=>250,
                                "Currency"=>"USD",
                                "senderPhone"=>"00201234567890",
                                "transactionStatus"=>1,
                                "transactionDate"=>"2021-05-02 09:36:11",
                                "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a785"
                            ],
                            [
                                "transactionAmount"=>700,
                                "Currency"=>"USD",
                                "senderPhone"=>"00201234567890",
                                "transactionStatus"=>1,
                                "transactionDate"=>"2021-05-29 09:36:11",
                                "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a799"
                            ],
                            [
                                "amount"=>300,
                                "currency"=>"EGP",
                                "phone"=>"00201034567890",
                                "status"=>100,
                                "created_at"=>"2021-03-29 09:36:11",
                                "id"=>"4fc2-a8d1"
                            ],
                            [
                                "amount"=>230,
                                "currency"=>"EUR",
                                "phone"=>"00201034567890",
                                "status"=>200,
                                "created_at"=>"2021-04-02 09:36:11",
                                "id"=>"4fc2-a8d2"
                            ],
                            [
                                "amount"=>700,
                                "currency"=>"EGP",
                                "phone"=>"00201034567890",
                                "status"=>200,
                                "created_at"=>"2021-04-10 09:36:11",
                                "id"=>"4fc2-a8d3"
                            ],
                            [
                                "amount"=>800,
                                "currency"=>"USD",
                                "phone"=>"00201034567890",
                                "status"=>300,
                                "created_at"=>"2021-04-20 09:36:11",
                                "id"=>"4fc2-a8d4"
                            ],
                            [
                                "amount"=>150,
                                "currency"=>"EGP",
                                "phone"=>"00201034567890",
                                "status"=>100,
                                "created_at"=>"2021-04-29 09:36:11",
                                "id"=>"4fc2-a8d5"
                            ]
                        ]

            ]);

        //test case to return all transactaions from DataProviderX providers
        $response = $this->call('GET', 'api/v1/transactaions?provider=DataProviderX');
        $this->assertEquals(200, $response->status());
        $this->json('GET', 'api/v1/transactaions?provider=DataProviderX', ['Accept' => 'application/json'])
            ->seeJsonEquals([
                "success"=> true,
                "message"=>"",
                "data"=> [
                        [
                            "transactionAmount"=>"200",
                            "Currency"=>"USD",
                            "senderPhone"=>"00201234567890",
                            "transactionStatus"=>1,
                            "transactionDate"=>"2021-03-29 09:36:11",
                            "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a613"
                        ],
                        [
                            "transactionAmount"=>100,
                            "Currency"=>"USD",
                            "senderPhone"=>"00201234567890",
                            "transactionStatus"=>3,
                            "transactionDate"=>"2021-04-7 09:36:11",
                            "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a605"
                        ],
                        [
                            "transactionAmount"=>400,
                            "Currency"=>"EUR",
                            "senderPhone"=>"00201234567890",
                            "transactionStatus"=>3,
                            "transactionDate"=>"2021-04-20 09:36:11",
                            "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a678"
                        ],
                        [
                            "transactionAmount"=>20000,
                            "Currency"=>"EGP",
                            "senderPhone"=>"00201234567890",
                            "transactionStatus"=>2,
                            "transactionDate"=>"2021-04-25 09:36:11",
                            "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a699"
                        ],
                        [
                            "transactionAmount"=>250,
                            "Currency"=>"USD",
                            "senderPhone"=>"00201234567890",
                            "transactionStatus"=>1,
                            "transactionDate"=>"2021-05-02 09:36:11",
                            "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a785"
                        ],
                        [
                            "transactionAmount"=>700,
                            "Currency"=>"USD",
                            "senderPhone"=>"00201234567890",
                            "transactionStatus"=>1,
                            "transactionDate"=>"2021-05-29 09:36:11",
                            "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a799"
                        ],

                    ]

            ]);

        //test case to return all transactaions from DataProviderX provider and currency EUR
        $response = $this->call('GET', 'api/v1/transactaions?provider=DataProviderX&currency=EUR');
        $this->assertEquals(200, $response->status());
        $this->json('GET', 'api/v1/transactaions?provider=DataProviderX&currency=EUR')
            ->seeJsonEquals([
                "success"=> true,
                "message"=>"",
                "data"=> [
                            [
                                "transactionAmount"=>400,
                                "Currency"=>"EUR",
                                "senderPhone"=>"00201234567890",
                                "transactionStatus"=>3,
                                "transactionDate"=>"2021-04-20 09:36:11",
                                "transactionIdentification"=>"d3d29d70-1d25-11e3-8591-034165a3a678"
                            ]
                ]

            ]);


        //test case to return users from DataProviderY , balance between 200 and 300 , and currcy is EG
        $response = $this->call('GET', 'api/v1/transactaions?provider=DataProviderY&amounteMin=50000&amounteMax=500000&currency=EG');
        $this->assertEquals(200, $response->status());
        $this->json('GET', 'api/v1/transactaions?provider=DataProviderY&amounteMin=50000&amounteMax=500000&currency=EG', ['Accept' => 'application/json'])
            ->seeJsonEquals([
                "success"=> true,
                "message"=>"",
                "data"=>
                    [
                    ]
            ]);


        //test case for provider doesn't exists
        $response = $this->call('GET', 'api/v1/transactaions?provider=DataProviderP');
        $this->assertEquals(404, $response->status());
        $this->json('GET', 'api/v1/transactaions?provider=DataProviderZZ', ['Accept' => 'application/json'])
            ->seeJsonEquals([
                "success"=> false,
                "message"=>"Provider Not Found",
            ]);
    }
}
