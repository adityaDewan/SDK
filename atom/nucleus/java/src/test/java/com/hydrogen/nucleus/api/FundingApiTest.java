/*
 * Hydrogen Atom API
 * The Hydrogen Atom API
 *
 * OpenAPI spec version: 1.7.0
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.nucleus.api;

import com.hydrogen.nucleus.model.PageBankLink;
import com.hydrogen.nucleus.model.PageDailyWithdrawal;
import com.hydrogen.nucleus.model.PageFunding;
import com.hydrogen.nucleus.ApiException;
import com.hydrogen.nucleus.model.BankLink;
import com.hydrogen.nucleus.model.DailyDeposit;
import com.hydrogen.nucleus.model.DailyWithdrawal;
import com.hydrogen.nucleus.model.ExternalAccountTransfer;
import com.hydrogen.nucleus.model.Funding;
import com.hydrogen.nucleus.model.PageDailyDeposit;
import com.hydrogen.nucleus.model.PageExternalAccountTransfer;

import java.util.UUID;

import org.junit.Test;
import org.junit.Ignore;

import java.util.List;

/**
 * API tests for FundingApi
 */
@Ignore
public class FundingApiTest {

    private final FundingApi api = new FundingApi();

    
    /**
     * Create a bank link
     *
     * Create a new bank link for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void createBankLinkUsingPostTest() throws ApiException {
        BankLink bankLinkInfoRequest = null;
        BankLink response = api.createBankLinkUsingPost(bankLinkInfoRequest);

        // TODO: test validations
    }
    
    /**
     * Create a deposit request
     *
     * Create a new deposit request for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void createDepositUsingPostTest() throws ApiException {
        DailyDeposit dailyDepositRequest = null;
        DailyDeposit response = api.createDepositUsingPost(dailyDepositRequest);

        // TODO: test validations
    }
    
    /**
     * Create a funding request
     *
     * Create a new funding request for an account. 
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void createFundingUsingPostTest() throws ApiException {
        Funding fundingRequest = null;
        Funding response = api.createFundingUsingPost(fundingRequest);

        // TODO: test validations
    }
    
    /**
     * Create a transfer requests
     *
     * Create a new external account transfer for a client account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void createTransferUsingPostTest() throws ApiException {
        ExternalAccountTransfer externalAccountTransferRequest = null;
        ExternalAccountTransfer response = api.createTransferUsingPost(externalAccountTransferRequest);

        // TODO: test validations
    }
    
    /**
     * Create a withdrawal request
     *
     * Create a new withdrawal request for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void createWithdrawalUsingPostTest() throws ApiException {
        DailyWithdrawal dailyWithdrawalRequest = null;
        DailyWithdrawal response = api.createWithdrawalUsingPost(dailyWithdrawalRequest);

        // TODO: test validations
    }
    
    /**
     * Delete a bank link
     *
     * Permanently delete a bank link defined for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void deleteBankLinkUsingDeleteTest() throws ApiException {
        UUID bankLinkId = null;
        api.deleteBankLinkUsingDelete(bankLinkId);

        // TODO: test validations
    }
    
    /**
     * Delete a deposit request
     *
     * Permanently delete a deposit request for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void deleteDepositUsingDeleteTest() throws ApiException {
        UUID depositId = null;
        api.deleteDepositUsingDelete(depositId);

        // TODO: test validations
    }
    
    /**
     * Delete a funding request
     *
     * Permanently delete a funding request defined for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void deleteFundingUsingDeleteTest() throws ApiException {
        UUID fundingId = null;
        api.deleteFundingUsingDelete(fundingId);

        // TODO: test validations
    }
    
    /**
     * Delete a transfer request
     *
     * Permanently delete a external account transfer from a client account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void deleteTransferUsingDeleteTest() throws ApiException {
        UUID transfer = null;
        UUID transferId = null;
        api.deleteTransferUsingDelete(transfer, transferId);

        // TODO: test validations
    }
    
    /**
     * Delete a withdrawal request
     *
     * Permanently delete a withdrawal request from an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void deleteWithdrawalUsingDeleteTest() throws ApiException {
        UUID withdrawalId = null;
        api.deleteWithdrawalUsingDelete(withdrawalId);

        // TODO: test validations
    }
    
    /**
     * List all bank links
     *
     * Get all bank links defined for all clients defined for your firm.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getBankLinkAllUsingGetTest() throws ApiException {
        Boolean ascending = null;
        String filter = null;
        String orderBy = null;
        Integer page = null;
        Integer size = null;
        PageBankLink response = api.getBankLinkAllUsingGet(ascending, filter, orderBy, page, size);

        // TODO: test validations
    }
    
    /**
     * Retrieve a bank link
     *
     * Retrieve the information for a bank link for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getBankLinkUsingGetTest() throws ApiException {
        UUID bankLinkId = null;
        BankLink response = api.getBankLinkUsingGet(bankLinkId);

        // TODO: test validations
    }
    
    /**
     * List all deposit requests
     *
     * Get the information for all deposit requests for all clients.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getDepositAllUsingGetTest() throws ApiException {
        Boolean ascending = null;
        String filter = null;
        String orderBy = null;
        Integer page = null;
        Integer size = null;
        PageDailyDeposit response = api.getDepositAllUsingGet(ascending, filter, orderBy, page, size);

        // TODO: test validations
    }
    
    /**
     * Retrieve a deposit request
     *
     * Retrieve the information for a deposit request for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getDepositUsingGetTest() throws ApiException {
        UUID depositId = null;
        DailyDeposit response = api.getDepositUsingGet(depositId);

        // TODO: test validations
    }
    
    /**
     * List all funding requests 
     *
     * Get the information for all funding requests defined for your firm.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getFundingAllUsingGetTest() throws ApiException {
        Boolean ascending = null;
        String filter = null;
        String orderBy = null;
        Integer page = null;
        Integer size = null;
        PageFunding response = api.getFundingAllUsingGet(ascending, filter, orderBy, page, size);

        // TODO: test validations
    }
    
    /**
     * Retrieve a funding request
     *
     * Retrieve the information for a funding request for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getFundingUsingGetTest() throws ApiException {
        UUID fundingId = null;
        Funding response = api.getFundingUsingGet(fundingId);

        // TODO: test validations
    }
    
    /**
     * List all transfer requests
     *
     * Get the information for all external account transfers defined for your firm.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getTransferAllUsingGetTest() throws ApiException {
        Boolean ascending = null;
        String filter = null;
        String orderBy = null;
        Integer page = null;
        Integer size = null;
        PageExternalAccountTransfer response = api.getTransferAllUsingGet(ascending, filter, orderBy, page, size);

        // TODO: test validations
    }
    
    /**
     * Retrieve a transfer request
     *
     * Retrieve the information for a external account transfer for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getTransferUsingGetTest() throws ApiException {
        UUID externalAccountTransferId = null;
        UUID transferId = null;
        ExternalAccountTransfer response = api.getTransferUsingGet(externalAccountTransferId, transferId);

        // TODO: test validations
    }
    
    /**
     * List all withdrawal requests
     *
     * Get the information for all withdrawal requests for all clients.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getWithdrawalAllUsingGetTest() throws ApiException {
        Boolean ascending = null;
        String filter = null;
        String orderBy = null;
        Integer page = null;
        Integer size = null;
        PageDailyWithdrawal response = api.getWithdrawalAllUsingGet(ascending, filter, orderBy, page, size);

        // TODO: test validations
    }
    
    /**
     * Retrieve a withdrawal request
     *
     * Retrieve the information for a withdrawal request for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void getWithdrawalUsingGetTest() throws ApiException {
        UUID withdrawalId = null;
        DailyWithdrawal response = api.getWithdrawalUsingGet(withdrawalId);

        // TODO: test validations
    }
    
    /**
     * Update list of bank link
     *
     * Update bank link list for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateBankLinkBulkUsingPutTest() throws ApiException {
        List<BankLink> bankLinkList = null;
        List<BankLink> response = api.updateBankLinkBulkUsingPut(bankLinkList);

        // TODO: test validations
    }
    
    /**
     * Update a bank link
     *
     * Update the information for a bank link for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateBankLinkUsingPutTest() throws ApiException {
        BankLink bankLink = null;
        UUID bankLinkId = null;
        BankLink response = api.updateBankLinkUsingPut(bankLink, bankLinkId);

        // TODO: test validations
    }
    
    /**
     * Update a deposit request
     *
     * Update the information for a deposit request for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateDepositUsingPutTest() throws ApiException {
        DailyDeposit deposit = null;
        UUID depositId = null;
        DailyDeposit response = api.updateDepositUsingPut(deposit, depositId);

        // TODO: test validations
    }
    
    /**
     * Update a funding request
     *
     * Update the information for a funding request for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateFundingUsingPutTest() throws ApiException {
        Funding funding = null;
        UUID fundingId = null;
        Funding response = api.updateFundingUsingPut(funding, fundingId);

        // TODO: test validations
    }
    
    /**
     * Update a transfer request
     *
     * Update the information for a external account transfer for a client account. 
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateTransferUsingPutTest() throws ApiException {
        ExternalAccountTransfer transfer = null;
        UUID transferId = null;
        ExternalAccountTransfer response = api.updateTransferUsingPut(transfer, transferId);

        // TODO: test validations
    }
    
    /**
     * Update a withdrawal request
     *
     * Update the information for a withdrawal request for an account.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void updateWithdrawalUsingPutTest() throws ApiException {
        DailyWithdrawal withdrawal = null;
        UUID withdrawalId = null;
        DailyWithdrawal response = api.updateWithdrawalUsingPut(withdrawal, withdrawalId);

        // TODO: test validations
    }
    
}