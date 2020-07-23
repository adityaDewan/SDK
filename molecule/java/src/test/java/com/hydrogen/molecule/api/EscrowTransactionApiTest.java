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
import com.hydrogen.molecule.model.EscrowDepositParams;
import com.hydrogen.molecule.model.EscrowTransactionResponse;
import com.hydrogen.molecule.model.PageEscrowTransactionResponse;

import java.util.UUID;
import org.junit.Test;
import org.junit.Ignore;

/**
 * API tests for EscrowTransactionApi
 */
@Ignore
public class EscrowTransactionApiTest {

    private final EscrowTransactionApi api = new EscrowTransactionApi();

    
    /**
     * Create a new Escrow Transaction
     *
     * 
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void createEscrowTransactionUsingPostTest() throws ApiException {
        EscrowDepositParams escrowDepositParams = null;
        EscrowTransactionResponse response = api.createEscrowTransactionUsingPost(escrowDepositParams);

        // TODO: test validations
    }
    
    /**
     * List all Escrow Transaction
     *
     * 
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getEscrowTransactionAllUsingGetTest() throws ApiException {
        Integer page = null;
        Integer size = null;
        String orderBy = null;
        Boolean ascending = null;
        Boolean getLatest = null;
        PageEscrowTransactionResponse response = api.getEscrowTransactionAllUsingGet(page, size, orderBy, ascending, getLatest);

        // TODO: test validations
    }
    
    /**
     * Fetch Escrow Transaction
     *
     * 
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getEscrowTransactionUsingGetTest() throws ApiException {
        UUID escrowTransactionId = null;
        EscrowTransactionResponse response = api.getEscrowTransactionUsingGet(escrowTransactionId);

        // TODO: test validations
    }
    
    /**
     * Update Escrow Transaction
     *
     * 
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateEscrowTransactionUsingPutTest() throws ApiException {
        UUID escrowTransactionId = null;
        EscrowDepositParams escrowDepositParams = null;
        EscrowTransactionResponse response = api.updateEscrowTransactionUsingPut(escrowTransactionId, escrowDepositParams);

        // TODO: test validations
    }
    
}
