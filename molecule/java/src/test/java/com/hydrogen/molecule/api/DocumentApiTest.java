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
import com.hydrogen.molecule.model.DocumentParams;
import com.hydrogen.molecule.model.DocumentResponse;
import com.hydrogen.molecule.model.DocumentVerifyResponse;
import com.hydrogen.molecule.model.TransactionSuccessResponse;

import java.util.UUID;
import org.junit.Test;
import org.junit.Ignore;

/**
 * API tests for DocumentApi
 */
@Ignore
public class DocumentApiTest {

    private final DocumentApi api = new DocumentApi();

    
    /**
     * Create a new Document
     *
     * 
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void createDocumentUsingPostTest() throws ApiException {
        DocumentParams documentParams = null;
        TransactionSuccessResponse response = api.createDocumentUsingPost(documentParams);

        // TODO: test validations
    }
    
    /**
     * Retrieve a Document
     *
     * 
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getDocumentUsingGetTest() throws ApiException {
        UUID documentId = null;
        DocumentResponse response = api.getDocumentUsingGet(documentId);

        // TODO: test validations
    }
    
    /**
     * Verify a Document
     *
     * 
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void verifyDocumentUsingPostTest() throws ApiException {
        DocumentParams documentParams = null;
        DocumentVerifyResponse response = api.verifyDocumentUsingPost(documentParams);

        // TODO: test validations
    }
    
}
