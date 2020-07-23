/*
 * Molecule API Documentation
 * The Hydrogen Molecule API
 *
 * OpenAPI spec version: 1.3.0
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.molecule.api;

import com.hydrogen.molecule.ApiException;
import com.hydrogen.molecule.model.PageTokenBalanceResponse;
import com.hydrogen.molecule.model.TokenBalanceResponse;

import java.util.UUID;
import org.junit.Test;
import org.junit.Ignore;

/**
 * API tests for TokenBalanceApi
 */
@Ignore
public class TokenBalanceApiTest {

    private final TokenBalanceApi api = new TokenBalanceApi();

    
    /**
     * Fetch Token Balance list
     *
     * 
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getTokenBalanceAllUsingGetTest() throws ApiException {
        UUID walletId = null;
        UUID tokenId = null;
        Integer page = null;
        Integer size = null;
        String orderBy = null;
        Boolean ascending = null;
        Boolean getLatest = null;
        PageTokenBalanceResponse response = api.getTokenBalanceAllUsingGet(walletId, tokenId, page, size, orderBy, ascending, getLatest);

        // TODO: test validations
    }
    
    /**
     * Fetch Token Balance details
     *
     * 
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getTokenBalanceUsingGetTest() throws ApiException {
        UUID tokenBalanceId = null;
        TokenBalanceResponse response = api.getTokenBalanceUsingGet(tokenBalanceId);

        // TODO: test validations
    }
    
}
