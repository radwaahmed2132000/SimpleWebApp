<?php

trait WebServiceResponse
{
  /**
   *  print error reponse 
   *  @param string $error
   *  @param string $code
   *  @return \Json
   */
    public function errorResponse($error, $code = "422")
    {
        return $this->generalResponse("", $error, $code);
    }
    /**
     *  print general reponse 
     *  @param array $data
     *  @param string $msg
     *  @param string $code
     *  @return \Json
   */
    public function generalResponse($data = "", $msg = "", $status_code = "200")
    {
        if ($data != "") {
            return json_encode([
                "response"          => $data,
                "meta"         => [ "status" => $status_code, "msg" => $msg]
            ], $status_code);
        } else {
            return json_encode([
            "meta"         => [ "status" => $status_code, "msg" => $msg]
            ], $status_code);
        }
    }
}
